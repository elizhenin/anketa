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
            $poliklinika = Model_Anketa::GetPoliklinnika($from,$to);
            $statsionar = Model_Anketa::GetPoliklinnika($from,$to);
            $ods_content = View::factory('report/content-xml');
            $ods_content->list1 = $poliklinika;
            $ods_content->list2 = $statsionar;
            $ods_content = $ods_content->render();
            file_put_contents('report_template/content.xml',$ods_content);
            self::Zip('report_template/','reports/'.time().'.ods');

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

    private function Zip($source, $destination)
    {
        if (!extension_loaded('zip') || !file_exists($source)) {
            return false;
        }

        $zip = new ZipArchive();
        if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
            return false;
        }

        $source = str_replace('\\', '/', realpath($source));

        if (is_dir($source) === true)
        {
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

            foreach ($files as $file)
            {
                $file = str_replace('\\', '/', $file);

                // Ignore "." and ".." folders
                if( in_array(substr($file, strrpos($file, '/')+1), array('.', '..')) )
                    continue;

                $file = realpath($file);

                if (is_dir($file) === true)
                {
                    $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                }
                else if (is_file($file) === true)
                {
                    $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                }
            }
        }
        else if (is_file($source) === true)
        {
            $zip->addFromString(basename($source), file_get_contents($source));
        }

        return $zip->close();
    }

}
