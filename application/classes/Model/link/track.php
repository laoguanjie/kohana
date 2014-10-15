<?php

class Model_Link_Track extends Model{

    private static $_instance;

    public static function instance(){

        if(self::$_instance === null){
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function setList(){
//        $track = Database::instance();
//        Database::DELETE;
        $params = array(
            'name'
        );
//        $res = DB::insert('user',array('name'))->values(array('lao'))->execute();
        $res = DB::select('*')->from('user')->execute()->as_array();
        d($res);
    }
}