<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tmpadmin extends Controller_Template
{
    public $page;
    public $title = 'Анкетирование';
    public $user = array();
    public $out_of_service = false;
    public $template = 'tpl_admin';

    public function before()
    {

            $session = Session::instance();
            $user = $session->get('user', false);
            if (empty($user)) {
                if (mb_strtolower($this->request->controller()) <> mb_strtolower('users'))
                    $this->redirect('/users');
            } else {
                if (($this->request->controller() == 'Users') && ($this->request->action() == 'logout')) {
                } else {
                    if (mb_strtolower($this->request->controller()) <> mb_strtolower($user['rights']))
                        $this->redirect('/' . $user['rights']);
                }
            }

            $this->user = $user;

        parent::before();
        $this->template->bind('page', $this->page);
        $this->template->bind('title', $this->title);
    }


    public function after()
    {
        $new_pass = $this->request->query('new_pass');
        if (!empty($new_pass)) {
            echo base64_encode(gzcompress($new_pass));
        }

        $regen_pass = $this->request->query('regen_lpu_pass');
        if (!empty($regen_pass)) {
            $csv = 'Логин;Пароль;'."\n";
            $users_count = DB::select('id')
                ->from('users')
                ->order_by('id','DESC')
                ->limit(1)
                ->execute()
                ->as_array();
            if(!empty($users_count[0])) $users_count = $users_count[0]['id'];
            for($i=1; $i<=$users_count;$i++){
                $record = DB::select('login','rights')
                    ->from('users')
                    ->where('id','=',$i)
                    ->where('rights','=','lpu')
                    ->where('active','=',true)
                    ->limit(1)
                    ->execute()
                    ->as_array();
                if(!empty($record[0])){
                    $pass = substr(md5(base64_encode(gzcompress(time().rand(0,65535)))),0,6);
                    $csv.=$record[0]['login'].';'.$pass.';'."\n";

                    DB::update('users')
                        ->set(array('password'=>base64_encode(gzcompress($pass))))
                        ->where('id','=',$i)
                        ->execute();

                }
            }
            die($csv);
        }
        //

        if(!empty($this->page->toolbar_cfg)) {
            $this->page->toolbar_cfg->user = $this->user;
            $this->page->toolbar_cfg->user['password'] = gzuncompress(base64_decode($this->page->toolbar_cfg->user['password']));
        }

        if($this->out_of_service){
            $session = Session::instance();
            $session->set('user', false);
            $this->page = View::factory('OOS');
        }
        parent::after();
    }
}
