<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Anketa extends Controller_Tmp
{

    public function before()
    {
        $this->menu = View::factory('anketa/menu');
        parent::before();
    }


    public function action_index()
    {
      $page = View::factory('anketa/index');

      $this->page = $page;
    }

	public function action_finished()
	{
	$page = View::factory('anketa/finished');
	$index = View::factory('anketa/index');
	$page->index = $index;
	$this->page = $page;
	}

    public function action_poliklinnika()
    {
        if ($this->request->method() == Request::POST) {
            $post = $this->request->post();
            Model_Anketa::AddPoliklinnika($post);
            $this->redirect('/anketa/finished');
        }
        $page = View::factory('anketa/poliklinnika');
        $medorg = Model_Catalog::GetMedOrg(false);
        $new = array();
        foreach($medorg as $one){
            $new[$one['id']]=$one['name'];
        }
        $medorg = $new;unset($new);
        $page->medorg = $medorg;
        $this->page = $page;
    }

    public function action_statsionar()
    {
        if ($this->request->method() == Request::POST) {
            $post = $this->request->post();
            Model_Anketa::AddStatsionar($post);
        $this->redirect('/anketa/finished');
        }
        $page = View::factory('anketa/statsionar');
        $medorg = Model_Catalog::GetMedOrg(false);
        $new = array();
        foreach($medorg as $one){
            $new[$one['id']]=$one['name'];
        }
        $medorg = $new;unset($new);
        $page->medorg = $medorg;
        $this->page = $page;
    }

}
