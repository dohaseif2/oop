<?php 

/*
// abstraction -- polymorphims -- design pattern

interface User {

	// cannot be instanciated
	// cannot containt properties
	// only containt abstract method

	// public $username ='ahmed'; // xxx
	public function get($x);

}


interface Admin {

}

#------------------

class SuperUser implements User , Admin {

	public function get($x){

	}

}

#--------------------

// $user = new User ;

*/

interface shape {

	public function dimension();

	public function test() ;
}

class Circle implements shape {

	public function dimension() {

	}
}


class Rectangle {

	public function dimension() {
		
	}

}