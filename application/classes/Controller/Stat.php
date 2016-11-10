<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Stat extends Controller_Tmp
{

public function before()
{
    $this->menu = View::factory('stat/export/menu');
    parent::before();
}

    public function action_index()
    {
        $this->redirect('/stat/export');
    }

   public function action_journal()
    {
        $page = View::factory('stat/journal/index');
        $page->toolbar_cfg = View::factory('stat/toolbar');
        $this->page = $page;
    }

//    public function action_export()
//    {
//        $page = View::factory('stat/export/index');
//
//        $this->page = $page;
//    }

    public function action_export()
    {
        if ($this->request->method() == Request::GET) {
            $from = $this->request->post('from');
            $to = $this->request->post('to');
            /*
             * Привести к одному полю ввода: выбор месяц+год
             * from = "YYYY-MM-01 00:00:00"
             * to = "YYYY-(MM+1)-01 00:00:00" убедившись в корректном переключении декабрь->январь
             * from = strtotime(from);
             * to = strtotime(to)-1;
             *
             */
            $poliklinnika = Model_Anketa::GetPoliklinnika($from,$to);
            $statsionar = Model_Anketa::GetPoliklinnika($from,$to);
        }
        $page = View::factory('report/index');
        $medorg = Model_Catalog::GetMedOrg(false);
        $new = array();
        foreach($medorg as $one){
            $new[$one['id']]=$one['name'];
        }
        $medorg = $new;unset($new);
        $page->medorg = $medorg;
        if(!empty($records)) $page->records = $records;
        $this->page = $page;
    }


}
