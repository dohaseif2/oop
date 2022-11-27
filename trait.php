<?php 



trait User {

	// cannot instanciate trait

	// can contain propreties -- methods

	public $username = null ;

	public function __construct($username)
	 {
	 	$this->username = $username;
	 } 

}

#------------------
trait Admin  {

	public function __destruct()
	{
		echo $this->username ;
	}
}

#------------------
class SuperAdmin   {

	use User , Admin ;


}

#------------------

$user = new SuperAdmin('islam') ;
