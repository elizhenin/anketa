<?php defined('SYSPATH') or die('No direct script access.');

class Model_Users extends Model

{

    static function GetAllUsers($limit, $offset, $sort, $search)
    {
        $db = DB::select(
            array('users.id', 'recid'),
            array('users.login', 'login'),
            array('users.rights', 'rights'),
            array('users.email', 'email'),
            array('users.active', 'active'),
            array('users.med_org_id', 'med_org_id')
        )
            ->from('users');
        if (!empty($sort)) {
            foreach ($sort as $one)
                   if (
                        ($one['field'] == 'med_org_name')
                    ) {
                       $db->order_by('med_org_id', $one['direction']);
                    } else
                $db->order_by($one['field'], $one['direction']);
        } else {
            $db->order_by('active', 'DESC')
                ->order_by('rights', 'ASC')
                ->order_by('login', 'ASC');
        }
        if (!empty($search)) {
            foreach ($search as $one)
                if (
                    ($one['field'] == 'med_org_name') ||
                    ($one['field'] == 'active')
                ) {
                } else
                    $db->or_where($one['field'], 'like', '%' . $one['value'] . '%');
        }


        $db = $db
            ->limit($limit)
            ->offset($offset)
            ->execute()
            ->as_array();
        if (!empty($db)) {
            $medorg = Model_Catalog::GetMedOrg();
            $return = array();
            foreach($db as $item){
                foreach($medorg as $one){
                    if($item['med_org_id']==$one['dicid']){
                        $item['med_org_name'] = $one['name'];
                        break;
                    }
                }
                $return[$item['recid']] = $item;
            }
            return $return;
        }
        else return false;
    }

    static function GetAllUsersCount($search)
    {
        $db = DB::select(array(DB::expr('COUNT("id")'), 'count'))
            ->from('users');

        if (!empty($search)) {
            foreach ($search as $one)
                if (
                    ($one['field'] == 'med_org_name') ||
                    ($one['field'] == 'active')
                ){}else
                $db->or_where($one['field'], 'like', '%' . $one['value'] . '%');
        }

        $db = $db
            ->execute()
            ->as_array();
        if (!empty($db)) return $db[0]['count'];
        else return false;
    }

    static function GetUser($id)
    {
        $db = DB::select()
            ->from('users')
            ->where('id', '=', $id)
            ->execute()
            ->as_array();
        if (!empty($db[0])) {
            $db[0]['password'] = gzuncompress(base64_decode($db[0]['password']));
            return $db[0];
        } else return false;
    }

    static function SaveUser($id, $login, $password, $email, $rights, $active)
    {
        $login = htmlspecialchars(trim($login));
        $password = base64_encode(gzcompress($password));
        if (!empty($active)) $active = 1;
        else $active = 0;

        $data = array();
        if (!empty($login)) $data['login'] = $login;
        if (!empty($password)) $data['password'] = $password;
        if (!empty($email)) $data['email'] = $email;
        if (!empty($rights)) $data['rights'] = $rights;
        $data['active'] = $active;

        if (empty($id)) {
            DB::insert('users', array_keys($data))
                ->values($data)
                ->execute();

        } else {
             DB::update('users')
                ->set($data)
                ->where('id', '=', $id)
                ->execute();
        }
    }

    static function SwitchUserActive($id)
    {
        $db = DB::select('active')
            ->from('users')
            ->where('id', '=', $id)
            ->limit(1)
            ->execute()
            ->as_array();
        if(!empty($db[0])){
            $db = $db[0];
            if ($db['active']) $db['active'] = 0;
            else $db['active'] = 1;
            DB::update('users')
                ->set($db)
                ->where('id','=',$id)
                ->execute();
            return $db['active'];
        }else return false;
    }

    static function AssocUser($id, $medorg)
    {

        $data = array();

        $data['med_org_id'] = $medorg;

        if (empty($id)) {
             DB::insert('users', array_keys($data))
                ->values($data)
                ->execute();
        } else {
             DB::update('users')
                ->set($data)
                ->where('id', '=', $id)
                ->execute();
        }
    }

    static function GetUsersLpu($limit, $offset)
    {
        $db = DB::select(
            array('users.id', 'recid'),
            array('users.login', 'login'),
            array('med_org.id', 'med_org_id')
        )
            ->from('users')
            ->join('med_org', 'left')
            ->on('users.med_org_id', '=', 'med_org.id')
            ->where('users.rights','=','lpu')
            ->where('users.active','=',1)
            ->order_by('users.login','ASC')
            ->limit($limit)
            ->offset($offset)
            ->execute()
            ->as_array();
        if (!empty($db)) return $db;
        else return false;
    }

    static function GetUsersLpuCount()
    {
        $db = DB::select(array(DB::expr('COUNT("id")'), 'count'))
            ->from('users')
            ->where('users.rights','=','lpu')
            ->where('users.active','=',1)
            ->execute()
            ->as_array();
        if (!empty($db)) return $db[0]['count'];
        else return false;
    }

}
