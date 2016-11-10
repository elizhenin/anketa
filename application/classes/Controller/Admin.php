<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Tmpadmin
{


    public function action_index()
    {

        $page = View::factory('admin/index');
        $page->toolbar_cfg = View::factory('admin/toolbar');
        $page->med_org = Model_Catalog::GetMedOrg();
        $this->page = $page;
    }

    public function action_useredit()
    {
        $page = View::factory('admin/user_edit');
        $page->user = Model_Users::GetUser($this->request->query('id'));
        $this->page = $page;
    }

    public function action_medorgedit()
    {
        $page = View::factory('admin/medorg');
        $page->toolbar_cfg = View::factory('admin/toolbar');
        $this->page = $page;
    }


}
