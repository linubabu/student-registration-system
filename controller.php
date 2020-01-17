<?php

class controller{

	public function __construct()
	{
		include_once("views/index.php");
	}
	/*
	public function display()
	{
	   $uname= $this->username;
	   $passw= $this->password;
	  include '../models/model.php';
	  $mod= new model();
	  $mod->insert($uname, $passw);		
	}
*/
	public function reg(){
		include_once('views/registration.php');
	}
	public function login(){
		include_once('views/login.php');
		//include_once();
	}
}
?>