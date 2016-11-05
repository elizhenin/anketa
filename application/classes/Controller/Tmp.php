<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tmp extends Controller_Template
{
    public $page;
    public $menu;
    public $title = 'Анкетирование';
    public $out_of_service = false;
    public $template = 'tpl_front';

    public function before()
    {

        parent::before();
        $this->template->bind('page', $this->page);
        $this->template->bind('title', $this->title);
    }

    public function after()
    {
        $this->template->menu = $this->menu;
        parent::after();
    }
}
