<?php

class Cookie{
	public $username;
        public $coffee;
        public $token;

        public function __toString() {
            return  "<p> Hey ".$this->username."! </p><br>" .
                    "<p> Here is your token for a free ". $this->coffee."!!</p><p>".$this->token."</p><p>Give us this token at your next visit!</p>";
        }
}
