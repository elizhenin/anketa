<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Stat extends Controller_Tmpstat
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
        $medorg = Model_Catalog::GetMedOrg(false);
        $new = array();
        foreach($medorg as $one){
            $new[$one['id']]=trim($one['name']);
        }
        $medorg = $new;unset($new);
        if ($this->request->method() == Request::GET) {
            $from = $this->request->query('from');
            $to = $this->request->query('to');
            $month = $this->request->query('month');
            if (!empty($from) ||
                !empty($to) ||
                !empty($month)
           ){
            $poliklinika = Model_Anketa::GetPoliklinnika($from, $to, $month);
            $statsionar = Model_Anketa::GetStatsionar($from, $to, $month);
            $filename = Model_Anketa::GenerateReports($poliklinika, $statsionar);
        }
        }
        $page = View::factory('report/index');
        if(!empty($filename))
        $page->download =$filename;
        $page->medorg = $medorg;
        if(!empty($records)) $page->records = $records;
        $this->page = $page;
    }


}
