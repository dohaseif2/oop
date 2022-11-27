<?php 


class User {

	public const HOST = 'localhost';

	public function test()
	{
		echo self::HOST ;
	}

}

# -------------------

echo User::HOST ;

// $user = new User ; 

// $user -> test();