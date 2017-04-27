<?php

/**
 * Created by PhpStorm.
 * User: 2
 * Date: 01.07.2016
 * Time: 14:55
 */
class controller extends god{
    
    public $db;
    public $sm;
    protected  $core;
    

    function __construct(){
        $this->db = new SafeMySQL();
        $this->Sm = new Smarty();

        $this->Sm->template_dir = $_SERVER['DOCUMENT_ROOT']."/tpl";
		$this->Sm->compile_dir = $_SERVER['DOCUMENT_ROOT']."/tpl_c";

		$this->Sm->assign('date',date("Y"));
    }

}