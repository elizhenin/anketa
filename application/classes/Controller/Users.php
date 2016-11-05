<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Tmpadmin
{


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
                $this->redirect('/'.$user['rights']);
            }else{

            }
        }
        $page = View::factory('login');
        $this->page = $page;

    }

    public function action_logout()
    {
        $session = Session::instance();
        $user = $session->get('user', false);
        $session->set('user', false);
    }

    public function action_index()
    {
        $this->redirect('/users/login');
    }
}
