<?php 


// inheritance

class Car {

	public $color = null ; 
	public $model = null ;

	public function __construct($color , $model)
	{
		$this->color = $color;
		$this->model = $model;
	}

	public function __destruct()
	{
		echo "the car`s color is {$this->color} and model = {$this->model}";
	}


} // end class

# ----------------------

class SportCar extends Car {

	public $horsePower = null ;

	// overriding
	public function __construct($color , $model , $hp)
	{
		parent::__construct($color,$model);
		// $this->color = $color;
		// $this->model = $model;
		$this->horsePower = $hp;
	}

	// overriding
	public function __destruct()
	{	
		parent::__destruct();
		echo " and horsePower = {$this->horsePower}";
	}


} // end class

#------------------------

$car = new SportCar('red' , 1970 , 2000);


