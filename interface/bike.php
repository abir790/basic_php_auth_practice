<?php 
require 'motors.php';
class Fuel implements Motors{
	public static $pen;
	public $capacity;
	protected $enginCapacity;
	public function fualCapacity($capacity,$enginCapacity){
		$this->capacity=$capacity;
		$this->enginCapacity=$enginCapacity;
		return $capacity." <br>".$enginCapacity;
		echo "<br>";
	}
	public function bike(){
		self::$pen='materdro';

		return $this->capacity;

	}

	public function car(){
		$cr=$this->enginCapacity;
		return $cr;
	}
	public function bus(){
		return $this->capacity;
	}



}

/*
$ful=new Fuel();
echo $ful->fualCapacity(5,8);
echo "<br>";
echo $ful->bike();
echo "<br>";
echo $ful->car();
echo "<br>";
echo $ful->bus();
echo "<br>...........";
$ful1=new Fuel();
echo $ful1->bike();
echo "<br>";
echo Fuel::$pen;   // static j kono jaygate define kora ba change kora hole sob object ei seta akoi vabe change hoye jabe
*/
 ?>