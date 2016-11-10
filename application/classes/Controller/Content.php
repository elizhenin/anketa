<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Content extends Controller_Tmp
{


    public function action_index()
    {
        $page = View::factory('content/index');
        $this->page = $page;
    }

}
