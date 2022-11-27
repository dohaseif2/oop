<?php 


// abstraction 

abstract class LoggedUser {

	public $username = 'ahmed';

	public function get()
	{
		echo $this->username ;
	}

	// abstract method
	public abstract function login($s) :bool;
	// username password

} // end class

#-------------------------

class Admin extends LoggedUser {

	public function login($s) :bool {
		// username password priv
		return true ;
	}
}

#---------------------------

class User extends LoggedUser {
	public function login($s) :bool {
		// username password priv
		return false ;
	}
}

$user = new User ;
