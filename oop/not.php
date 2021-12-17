<?php 

//namespace App;  ///  namespace not namesapce k extend korte parbe na but ... not-namespace namespace k parbe 
require 'Bus.php';
//require 'vendor\autoload.php'; //ata ababe nibe na coz ata k ojject create er somoy use korte hoy  
//use App\Bus;

class Not extends Bus{
	public $capacity=50;
	public $fualAmount=70;
	public $ff=400;
	public $liter=5;
	public $totalAmount;
	private $bike;
	protected $bike1='Fz5';




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

?>