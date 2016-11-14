<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tmp extends Controller_Template
{
    public $page;
    public $menu;
    public $title = 'Анкетирование';
    public $out_of_service = false;
    public $template = 'tpl_front';

    public function before()
    {

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
        $this->template->menu = $this->menu;
        parent::after();
    }
}
