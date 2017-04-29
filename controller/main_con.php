<?php

/**
 * Created by PhpStorm.
 * User: 2
 * Date: 01.07.2016
 * Time: 13:51
 */
class main_con extends controller{
    function index(){
      $win = 100000;
      $this->tpl->set('title', 'Главная');
      $this->tpl->set('winner',$win);
      $this->tpl->show('index.tpl'); 
   }
   function paging($pages = array()){
   		$this->tpl->set('title', '');
   		if ($pages[0] == "about"){
   			$this->tpl->set('title', 'О проэкте');
   			$this->tpl->show('static.tpl');
   		}else{
   			$this->show_404();
   		}
   }
   function edit($edit){
      echo " ".$edit." ";
   }
   function lang($lang = "ru"){
   	echo $lang;
   }
}