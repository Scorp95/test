<?php


class Token{

	public $coffee;
	public $username;

	public function __construct($coffee, $username){
		$this->coffee = (string)$coffee;
		$this->username = (string)$username;
		$this->crypto = "crc32";
	}

	public function __toString(){
		$x = $this->crypto;
		return substr(md5(rand($x($this->coffee . $this->username), 0xc0ffee)), 10);
	}	

}
