<?php defined('SYSPATH') or die('No direct script access.');

class Model_Anketa extends Model

{

    static function Zip($source, $destination)
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


    static function AddPoliklinnika($post)
    {
        $data = array();
        $data['gender'] = $post['gender'];
        $data['age'] = $post['age'];
        $data['medorg_id'] = $post['medorg_id'];
        $data['difficulty'] = $post['difficulty'];
        $data['satisfaction'] = $post['satisfaction'];
        $data['suggestions'] = htmlspecialchars(trim($post['suggestions']));
        if(isset($post['spec1'])) $data['spec1'] = '1';
        if(isset($post['spec2'])) $data['spec2'] = '1';
        if(isset($post['spec3'])) $data['spec3'] = '1';
        if(isset($post['spec4'])) $data['spec4'] = '1';
        $data['spectxt'] = $post['spectxt'];
        if(isset($post['detail1'])) $data['detail1'] = '1';
        if(isset($post['detail2'])) $data['detail2'] = '1';
        if(isset($post['detail3'])) $data['detail3'] = '1';
        if(isset($post['detail4'])) $data['detail4'] = '1';
        if(isset($post['detail5'])) $data['detail5'] = '1';
        $data['detailtxt'] = htmlspecialchars(trim($post['detailtxt']));
        $data['date'] = time();
        $data['tdate'] = DB::expr('NOW()');
        DB::insert('poliklinnika',array_keys($data))
            ->values($data)
            ->execute();
    }

    static function AddStatsionar($post)
    {
        $data = array();
        $data['gender'] = $post['gender'];
        $data['age'] = $post['age'];
        $data['medorg_id'] = $post['medorg_id'];
        $data['time'] = $post['time'];
        $data['satisfaction'] = $post['satisfaction'];
        $data['conditions'] = $post['conditions'];
        $data['food'] = $post['food'];
        $data['problems'] = htmlspecialchars(trim($post['problems']));
	$data['date'] = time();
        $data['tdate'] = DB::expr('NOW()');
        DB::insert('statsionar',array_keys($data))
            ->values($data)
            ->execute();
    }

    static function GetPoliklinnika($dfrom, $dto, $dmonth)
    {
        $db = DB::select()
            ->from('poliklinnika');
        if(!empty($dfrom))
            $db->where('date','>=',strtotime($dfrom.'  00:00:00'));
        if(!empty($dto))
            $db->where('date','<=',strtotime($dto.'  23:59:59'));
        if(!empty($dmonth))
            $db->where('tdate','like',$dmonth.'%');
           $db = $db->where('medorg_id','>',0)
            ->execute()
            ->as_array();
        return $db;

    }

    static function GetStatsionar($dfrom, $dto, $dmonth)
    {
        $db = DB::select()
            ->from('statsionar');
            if(!empty($dfrom))
                $db->where('date','>=',strtotime($dfrom.'  00:00:00'));
        if(!empty($dto))
            $db->where('date','<=',strtotime($dto.'  23:59:59'));
        if(!empty($dmonth))
            $db->where('tdate','like',$dmonth.'%');
          $db = $db->where('medorg_id','>',0)
            ->execute()
            ->as_array();
        return $db;
    }

    static function GenerateReports($poliklinika,$statsionar){
        $medorg = Model_Catalog::GetMedOrg(false);
        $new = array();
        foreach($medorg as $one){
            $new[$one['id']]=trim($one['name']);
        }
        $medorg = $new;unset($new);
        $list1 = array();$list2 = array();
        $node1 = array(
            'medorg_name'=>'',
            'gender1'=>0,
            'gender2'=>0,
            'age1'=>0,
            'age2'=>0,
            'age3'=>0,
            'difficulty1'=>0,
            'difficulty2'=>0,
            'difficulty3'=>0,
            'difficulty4'=>0,
            'satisfaction1'=>0,
            'satisfaction2'=>0,
            'satisfaction3'=>0
        );
        $node2 = array(
            'medorg_name'=>'',
            'gender1'=>0,
            'gender2'=>0,
            'age1'=>0,
            'age2'=>0,
            'age3'=>0,
            'difficulty1'=>0,
            'difficulty2'=>0,
            'difficulty3'=>0,
            'difficulty4'=>0,
            'satisfaction1'=>0,
            'satisfaction2'=>0,
            'satisfaction3'=>0
        );
        $list1_counters = array(
            'spec1'=>0,
            'spec2'=>0,
            'spec3'=>0,
            'spec4'=>0,
            'spec5'=>0,
            'detail1'=>0,
            'detail2'=>0,
            'detail3'=>0,
            'detail4'=>0,
            'detail5'=>0,
            'detail6'=>0
        );
        $list2_counters = array(
            'conditions1'=>0,
            'conditions2'=>0,
            'conditions3'=>0,
            'conditions4'=>0,
            'food1'=>0,
            'food2'=>0,
            'food3'=>0,
            'food4'=>0
        );
        $suggestions = $spectxt = $detailtxt = $problems = array();
        if(!empty($poliklinika)) {
            foreach ($poliklinika as $one) {
                $list1[$one['medorg_id']] = $node1;
                $list1[$one['medorg_id']]['medorg_name'] = $medorg[$one['medorg_id']];
                $one['suggestions'] = trim($one['suggestions']);
                if(!empty($one['suggestions'])) $suggestions[] = trim($one['suggestions']);
                $one['spectxt'] = trim($one['spectxt']);
                if(!empty($one['spectxt'])) $spectxt[] = trim($one['spectxt']);
                $one['detailtxt'] = trim($one['detailtxt']);
                if(!empty($one['detailtxt'])) $detailtxt[] = trim($one['detailtxt']);
            }
            foreach ($poliklinika as $one) {
                if($one['gender']=='1') $list1[$one['medorg_id']]['gender1']++;
                if($one['gender']=='2') $list1[$one['medorg_id']]['gender2']++;
                if($one['age']=='1') $list1[$one['medorg_id']]['age1']++;
                if($one['age']=='2') $list1[$one['medorg_id']]['age2']++;
                if($one['age']=='3') $list1[$one['medorg_id']]['age3']++;
                if($one['difficulty']=='1') $list1[$one['medorg_id']]['difficulty1']++;
                if($one['difficulty']=='2') $list1[$one['medorg_id']]['difficulty2']++;
                if($one['difficulty']=='3') $list1[$one['medorg_id']]['difficulty3']++;
                if($one['difficulty']=='4') $list1[$one['medorg_id']]['difficulty4']++;
                if($one['satisfaction']=='1') $list1[$one['medorg_id']]['satisfaction1']++;
                if($one['satisfaction']=='2') $list1[$one['medorg_id']]['satisfaction2']++;
                if($one['satisfaction']=='3') $list1[$one['medorg_id']]['satisfaction3']++;
                if($one['spec1']==1)  $list1_counters['spec1']++;
                if($one['spec2']==1)  $list1_counters['spec2']++;
                if($one['spec3']==1)  $list1_counters['spec3']++;
                if($one['spec4']==1)  $list1_counters['spec4']++;
                $one['spectxt'] = trim($one['spectxt']);
                if(!empty($one['spectxt']))  $list1_counters['spec5']++;
                if($one['detail1']==1)  $list1_counters['detail1']++;
                if($one['detail2']==1)  $list1_counters['detail2']++;
                if($one['detail3']==1)  $list1_counters['detail3']++;
                if($one['detail4']==1)  $list1_counters['detail4']++;
                if($one['detail5']==1)  $list1_counters['detail5']++;
                $one['detailtxt'] = trim($one['detailtxt']);
                if(!empty($one['detailtxt'])) $list1_counters['detail6']++;
            }
        }
        if(!empty($statsionar)) {
            foreach ($statsionar as $one) {
                $list2[$one['medorg_id']] = $node2;
                $list2[$one['medorg_id']]['medorg_name'] = $medorg[$one['medorg_id']];
                $one['problems'] = trim($one['problems']);
                if(!empty($one['problems'])) $problems[] = trim($one['problems']);
            }
            foreach ($statsionar as $one) {
                if($one['gender']=='1') $list2[$one['medorg_id']]['gender1']++;
                if($one['gender']=='2') $list2[$one['medorg_id']]['gender2']++;
                if($one['age']=='1') $list2[$one['medorg_id']]['age1']++;
                if($one['age']=='2') $list2[$one['medorg_id']]['age2']++;
                if($one['age']=='3') $list2[$one['medorg_id']]['age3']++;
                if($one['time']=='1') $list2[$one['medorg_id']]['time1']++;
                if($one['time']=='2') $list2[$one['medorg_id']]['time2']++;
                if($one['time']=='3') $list2[$one['medorg_id']]['time3']++;
                if($one['time']=='4') $list2[$one['medorg_id']]['time4']++;
                if($one['satisfaction']=='1') $list2[$one['medorg_id']]['satisfaction1']++;
                if($one['satisfaction']=='2') $list2[$one['medorg_id']]['satisfaction2']++;
                if($one['satisfaction']=='3') $list2[$one['medorg_id']]['satisfaction3']++;
                if($one['conditions1']==1)  $list2_counters['conditions1']++;
                if($one['conditions2']==1)  $list2_counters['conditions2']++;
                if($one['conditions3']==1)  $list2_counters['conditions3']++;
                if($one['conditions4']==1)  $list2_counters['conditions4']++;
                if($one['food1']==1)  $list2_counters['food1']++;
                if($one['food2']==1)  $list2_counters['food2']++;
                if($one['food3']==1)  $list2_counters['food3']++;
                if($one['food4']==1)  $list2_counters['food4']++;
            }
        }
//
        $filename = 'report-'.time();
        mkdir('reports/'.$filename);
//
        $ods_content = View::factory('report/ods_form_template-content-xml');
        $ods_content->list1 = $list1;
        $ods_content->list1_counters = $list1_counters;
        $ods_content->list2 = $list2;
        $ods_content->list2_counters = $list2_counters;
        $ods_content = $ods_content->render();
        file_put_contents('ods_form_template/content.xml',$ods_content);
        self::Zip('ods_form_template/','reports/'.$filename.'/Report.ods');
//
        $odt_content = View::factory('report/odt_document_template-content-xml');
        $odt_content->suggestions = $suggestions;
        $odt_content->spectxt = $spectxt;
        $odt_content->detailtxt = $detailtxt;
        $odt_content->problems = $problems;
        $odt_content = $odt_content->render();
        file_put_contents('odt_document_template/content.xml',$odt_content);
        self::Zip('odt_document_template/','reports/'.$filename.'/Texts.odt');
//
//        system('unoconv -i FilterOptions=59,34,utf-8,1 -f xls '.'reports/'.$filename.'/Report.ods');
//        system('unoconv -i FilterOptions=59,34,utf-8,1 -f doc '.'reports/'.$filename.'/Texts.odt');

        self::Zip('reports/'.$filename,'reports/'.$filename.'.zip');
        unlink('reports/'.$filename.'/Report.xls');
        unlink('reports/'.$filename.'/Texts.doc');
        unlink('reports/'.$filename.'/Report.ods');
        unlink('reports/'.$filename.'/Texts.odt');
        rmdir('reports/'.$filename);
        return $filename.'.zip';
    }

}
