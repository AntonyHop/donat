<?php

/**
 * Created by PhpStorm.
 * User: 2
 * Date: 01.07.2016
 * Time: 14:55
 */
class controller extends god{
    
    public $db;
    public $tpl;
    

    function __construct(){
        $this->db = new SafeMySQL();
        $this->tpl = new TplMaster("tpl");
		$this->tpl->set('date',date("Y"));
    }

    function show_404(){
        header("HTTP/1.0 404 Not Found");
        $this->tpl->set('title', '404');
        $this->tpl->show('404.tpl');
    }

}