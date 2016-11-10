<?php defined('SYSPATH') or die('No direct script access.');

class Model_Login extends Model
{

    static $pass_salt = 'if43ui$^%$^%$FU!3847';

    static function checkUser($login, $password)
    {
        $login = htmlspecialchars(trim($login));
        $password = base64_encode(gzcompress($password));
        $select = DB::select()
            ->from('users')
            ->where('login', '=', $login)
            ->and_where('password', '=', $password)
            ->and_where('active', '=', '1')
            ->execute()
            ->as_array();
        if (!empty($select)) {
            return $select[0];
        } else {
            return false;
        }
    }


}
