<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends Model

{

    static function GetMedOrg($head = false)
    {
        $db = DB::select('id','dicid', 'name')
            ->from('med_org')
            ->where('deleted','=',0)
            ->order_by('id','ASC');
        if($head) $db->where('parentid','=',0);
           $db = $db ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = $value;
            }
        }
        return $return;
    }

    static function GetMedOrgUsers()
    {
        $db = DB::select(
            array('med_org.id','id'),
            array('med_org.dicid','dicid'),
            array('med_org.smo','smo'),
            array('med_org.name','name'),
			array('med_org.parentid','parentid'),
            array('users.login','login'),
            array('users.password','password')
            )
            ->from('med_org')
            ->join('users','left')
            ->on('users.med_org_id','=','med_org.dicid')
            ->where('deleted','=',0)
            ->order_by('dicid','ASC')
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            foreach ($db as $value) {
                $return[$value['id']] = $value;
            }
        }
        return $return;
    }

    static function GetOneMedOrg($id)
    {
        $db = DB::select('id','dicid', 'name')
            ->from('med_org')
        ->where('dicid','=',$id)
            ->where('deleted','=',0)
        ->limit(1)
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
           return $db[0];
        }
        return $return;
    }

    static function GetOneMedOrgBySMO($smo)
    {
        $db = DB::select('id','dicid', 'name')
            ->from('med_org')
            ->where('smo','=',$smo)
            ->where('deleted','=',0)
            ->limit(1)
            ->execute()
            ->as_array();
        $return = array();
        if (!empty($db)) {
            return $db[0];
        }
        return $return;
    }

    static function DelMedOrg($ids)
    {
        $db = DB::update('med_org')
            ->set(array('deleted'=>1));
            if(!empty($ids)){
                foreach($ids as $id){
                    $db->or_where('id','=',$id);
                }
            }
        $db->execute();
    }

    static function UpdMedOrg($changes)
    {
        if(!empty($changes))
            foreach($changes as $one){
                $id = $one['recid'];
                unset($one['recid']);
                if(!empty($one['name']))
                $one['name'] = htmlspecialchars_decode($one['name']);
                $db = DB::select()
                    ->from('med_org')
                    ->where('id','=',$id)
                    ->where('deleted','=',0)
                    ->limit(1)
                    ->execute()
                    ->as_array();
                if(!empty($db[0])) {
                    DB::update('med_org')
                        ->set($one)
                        ->where('id', '=', $id)
                        ->execute();
                }else{
                    $head = DB::select('id')
                        ->from('med_org')
                        ->where('dicid','=',$one['dicid'])
                        ->where('parentid','=',0)
                        ->limit(1)
                        ->execute()
                        ->as_array();
                    if(!empty($head[0]['id'])){
                        $one['parentid'] = $head[0]['id'];
                    }
                    DB::insert('med_org',array_keys($one))
                        ->values($one)
                        ->execute();
                }
            }
    }

}
