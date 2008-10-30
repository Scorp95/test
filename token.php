<?php


class Token{

	public $coffee;
	public $username;

	public function __construct($coffee, $username){
		$this->coffee = (string)$coffee;
		$this->username = (string)$username;
	}

	public function __toString(){
		return substr(md5(rand(strlen($this->coffee . $this->username), 0xc0ffee)), 10);
	}	

}
