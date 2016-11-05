<?php defined('SYSPATH') OR die('No direct script access.');

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404
{
    public function get_response()
    {
        $template = View::factory('template');
        $template->page = View::factory('404');
        $template->title = '404 ERROR';

        $response = Response::factory()
            ->status(404)
            ->body($template->render());

        return $response;
    }
}
