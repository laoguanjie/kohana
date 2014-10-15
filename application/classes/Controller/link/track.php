<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Link_Track extends Controller {

    public function action_test(){
        Model_Link_Track::instance()->setList();
//        $this->response->body('hello, world!');
    }


}