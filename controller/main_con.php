<?php

/**
 * Created by PhpStorm.
 * User: 2
 * Date: 01.07.2016
 * Time: 13:51
 */
class main_con extends controller{
    function index(){
      $this->Sm->assign('title', 'Главная');
      $this->Sm->assign('win','1000');
      $this->Sm->display('index.tpl'); 
   }
   function lang($lang){
   	echo $lang;
   }
}