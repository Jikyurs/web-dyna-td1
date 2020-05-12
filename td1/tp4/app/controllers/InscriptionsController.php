<?php
namespace controllers;
 /**
 * Controller InscriptionsController
 **/
 class InscriptionsController extends ControllerBase{

	/**
	*
	* @get("_default","name"=>"Home")
	*/
	public function index(){
		$this->loadView("InscriptionsController/index.html");
	}

	
	/**
	 *@route("inscription",)
	**/
	public function button(){
	    $this->loadView("InscriptionsController/button.html");
	}
	
	
	/**
	 *@route("/do/inscription","methods"=>["post"])
	**/
	public function Inscription($name,$mail){
	    $this->loadView("InscriptionsController/Inscription.html",["name"=>$name,"mail"=>$mail]);
	}
	
 }
