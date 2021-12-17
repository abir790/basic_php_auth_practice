<?php 

namespace App;
trait Veh{
	public $capacity=50;
	public $fualAmount=70;
	public $ff=400;
	public $liter=5;
	public $totalAmount;
	private $bike;
	protected $bike1='Fz5';
	//protected $bike;
	//const LI=300;  ////      akkhane  trait class a kono constant thakte parbe na. 



	public function capacity($bike){
		$this->bike=$bike;
		echo "<br>";
		echo "capacity of this $bike :".$this->capacity;
		echo "<br>";
	}

	public function f(){
		return $this->ff;
		echo "<br>";
	}

}