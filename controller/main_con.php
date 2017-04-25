<?php

/**
 * Created by PhpStorm.
 * User: 2
 * Date: 01.07.2016
 * Time: 13:51
 */
class main_con extends controller{
    function index(){
      $this->Smarty->assign('name', 'Катруська');
      $this->Smarty->display('index.tpl'); 
   }

    function lang($curr_lang = "ru"){
    	echo $curr_lang;
    }
}