<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{

    public function before()
    {
        $session = Session::instance();
        $user = $session->get('user', false);
        if (empty($user)) {
            die(json_encode(array('status' => 'error', 'message' => 'NOT AUTHORIZED')));
        }
        parent::before();
    }

    public function action_login()
    {
        if ($this->request->method() == Request::POST) {
            $post = $this->request->post();
            $login = $post['login'];
            $password = $post['password'];
            $user = Model_Login::checkUser($login, $password);
            if ($user) {
                $session = Session::instance();
                $session->set('user', $user);
                echo 'success';
            }
        }
    }

    public function action_userlist()
    {
        if ($this->request->method() == Request::GET) {
            $limit = $this->request->query('limit');
            $offset = $this->request->query('offset');
            $sort = $this->request->query('sort');
            $search = $this->request->query('search');
            $cmd = $this->request->query('cmd');

            if ($cmd == 'get-records') {
                $users = Model_Users::GetAllUsers($limit, $offset, $sort, $search);
                $return['status'] = 'success';
                $return['total'] = Model_Users::GetAllUsersCount($search);
                if (!empty($return['total']))
                    foreach ($users as $one) {
                        if ($one['active']) $one['active'] = '&#9745;';
                        else $one['active'] = '<p>&#9744;</p>';
                        $return['records'][] = $one;
                    }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }
    }

    public function action_usersupdate()
    {
        if ($this->request->method() == Request::POST) {
            $cmd = $this->request->post('cmd');
            if ($cmd == 'save-record') {
                $record = $this->request->post('record');
                $id = $record['recid'];
                $login = $record['login'];
                $password = $record['password'];
                $email = $record['email'];
                $rights = $record['rights'];
                $active = $record['active'];
                Model_Users::SaveUser($id, $login, $password, $email, $rights, $active);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
            if ($cmd == 'switch-active') {
                $id = $this->request->post('recid');
                Model_Users::SwitchUserActive($id);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }

    }

    public function action_adminusersassoclist()
    {
        if ($this->request->method() == Request::GET) {
            $limit = $this->request->query('limit');
            $offset = $this->request->query('offset');
            $cmd = $this->request->query('cmd');
            if ($cmd == 'get-records') {
                $persons = Model_Users::GetUsersLpu($limit, $offset);
                $return['status'] = 'success';
                $return['total'] = Model_Users::GetUsersLpuCount();
                if (!empty($return['total']))
                    foreach ($persons as $one) {
                        $return['records'][] = $one;
                    }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }
    }

    public function action_adminusersassoclistcomplete()
    {
        if ($this->request->method() == Request::POST) {
            $id = $this->request->post('id');
            $med_org_id = $this->request->post('med_org_id');
            $cmd = $this->request->post('cmd');
            if ($cmd == 'assoc-medorg') {
                Model_Users::AssocUser($id, $med_org_id);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
        }

    }

    public function action_medorglist()
    {
        if ($this->request->method() == Request::POST) {
            $cmd = $this->request->post('cmd');

            if ($cmd == 'get-records') {
                $medorg = Model_Catalog::GetMedOrgUsers();
                foreach ($medorg as $key => $one) {
                    if (!empty($one['password']))
                        $medorg[$key]['password'] = gzuncompress(base64_decode($one['password']));
                }
                $return['status'] = 'success';
                $return['total'] = count($medorg);
                if (!empty($return['total']))
                    foreach ($medorg as $one) {
                        $one['recid'] = $one['id'];
                        unset($one['id']);
                        $one['name'] = htmlspecialchars(trim($one['name']));
                        $return['records'][] = $one;
                    }
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }
            if ($cmd == 'delete-records') {
                $selected = $this->request->post('selected');
                Model_Catalog::DelMedOrg($selected);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }

            if ($cmd == 'save-records') {
                $changes = $this->request->post('changes');
                Model_Catalog::UpdMedOrg($changes);
                $return['status'] = 'success';
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
            }

        }
    }

    public function action_userprofileform()
    {
        $form = View::factory('userprofileform');
        $session = Session::instance();
        $user = $session->get('user', false);
        $form->id = $user['id'];
        $form->login = $user['login'];
        $form->password = $user['password'];
        $form->email = $user['email'];
        $this->response->body($form);
    }

    public function action_userprofileformcomplete()
    {
        if ($this->request->method() == Request::POST) {
            $cmd = $this->request->post('cmd');
            if ($cmd == 'save-record') {
                $record = $this->request->post('record');
                $return['status'] = 'success';
                $session = Session::instance();
                $user = $session->get('user', false);
                $id = $record['id'];
                $login = $record['login'];
                $password = $record['password'];
                $email = $record['email'];
                $rights = $user['rights'];
                $active = $user['active'];
                if ($user['id'] == $id)
                    Model_Users::SaveUser($id, $login, $password, $email, $rights, $active);
                else $return = array('status' => 'error', 'message' => 'IDs not same');
                echo stripslashes(json_encode($return, JSON_UNESCAPED_UNICODE));
                $user = Model_Login::checkUser($login, $password);
                $session = Session::instance();
                $session->set('user', $user);
            }
        }
    }

} // End Ajax
