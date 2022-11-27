<?php 

// encapsulation

// access modifiers

// public 

// private

// protected

class User {

	private $username = 'kareem' ;

	// getter 
	private function getData()
	{

			echo $this -> username ;

	}


} // end class

#--------------------

class Admin extends User {

	public function get()
	{
		$this -> getData();
	}

} // end class

#----------------------

$user = new Admin ;
$user ->get() ;