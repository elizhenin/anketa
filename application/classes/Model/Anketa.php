<?php defined('SYSPATH') or die('No direct script access.');

class Model_Anketa extends Model

{

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
        DB::insert('statsionar',array_keys($data))
            ->values($data)
            ->execute();
    }

    static function GetPoliklinnika($dfrom, $dto)
    {
        $db = DB::select()
            ->from('poliklinnika')
            ->where('date','>=',strtotime($dfrom.'  00:00:00'))
            ->where('date','<=',strtotime($dto.'  23:59:59'))
               ->where('medorg_id','>',0)
            ->execute()
            ->as_array();
        return $db;

    }

    static function GetStatsionar($dfrom, $dto)
    {
        $db = DB::select()
            ->from('statsionar')
            ->where('date','>=',strtotime($dfrom.'  00:00:00'))
            ->where('date','<=',strtotime($dto.'  23:59:59'))
            ->where('medorg_id','>',0)
            ->execute()
            ->as_array();
        return $db;
    }

}
