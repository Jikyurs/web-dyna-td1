<?php
namespace controllers;

use ws\controllers\AbstractWsController;

 /**
 * Controller MainController
 **/
class MainController extends AbstractWsController{
    /**
     *
     * @get("_default","name"=>"Home")
     */
    public function index() {}

	/**
	 *@route("contact","methods"=>["get"],"name"=>"Contact")
	**/
	public function contactForm(){
		
		$this->loadView('MainController/contactForm().html');

	}


	/**
	 *@route("partners","methods"=>["get"],"name"=>)
	**/
	public function partnersList(){
		
		$this->loadView('MainController/partnersList.html');

	}


	/**
	 *@route("partner/{name}","methods"=>["get"])
	**/
	public function partnerDetails($name){
		
		$this->loadView('MainController/partnerDetails.html');

	}


	/**
	 *@route("sendMessage","methods"=>["post"])
	**/
	public function sendMessage(){
		
		$this->loadView('MainController/sendMessage.html');

	}

}
