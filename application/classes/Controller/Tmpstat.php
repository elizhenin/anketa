<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tmpstat extends Controller_Template
{
    public $page;
    public $menu;
    public $title = 'Анкетирование';
    public $user = array();
    public $out_of_service = false;
    public $template = 'tpl_stat';

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
        $command = $this->request->query('command');
        if(!empty($command)){
            switch ($command){
                case 'renew_tdate_poliklinnika':{
                    $db = DB::select('id','date')
                        ->from('poliklinnika')
                        ->execute()
                        ->as_array();

                    if(!empty($db))
                        foreach($db as $one) {
                            $record = array(
                                'tdate'=>date('Y-m-d H:i:s',(int)$one['date'])
                            );
                            DB::update('poliklinnika')
                                    ->set($record)
                            ->where('id','=',$one['id'])
                                ->execute();
                        }
break;
                }
                case 'renew_tdate_statsionar':{
                    $db = DB::select('id','date')
                        ->from('statsionar')
                        ->execute()
                        ->as_array();

                    if(!empty($db))
                        foreach($db as $one) {
                            $record = array(
                                'tdate'=>date('Y-m-d H:i:s',(int)$one['date'])
                            );
                            DB::update('statsionar')
                                ->set($record)
                                ->where('id','=',$one['id'])
                                ->execute();
                        }
                    break;
                }
            }
        }

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
