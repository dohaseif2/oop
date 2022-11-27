<?php 


class User {

	public static $color = 'red';
	public $pass = '123';

	public static function get()
	{
		echo self::$color ;
		// echo $this->pass ; XXXX
	}


} // class

echo User::get() ;