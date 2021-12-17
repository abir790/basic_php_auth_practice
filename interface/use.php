<?php 


class Veh{
	public $capacity=50;
	public $fualAmount=70;
	public $liter=5;
	public $totalAmount;
	private $bike;
	protected $bike1='Fz5';
	//protected $bike;
	const LI=300;


		public function __construct($capacity,$fualAmount,$liter){
		$this->capacity=$capacity;
		$this->fualAmount=$fualAmount;
		$this->liter=$liter;
		echo "Hellow Vehicle Constructor<br>";


	}



	public function capacity($bike){
		$this->bike=$bike;
		echo "<br>";
		echo "capacity of this $bike :".$this->capacity;
		echo "<br>";
	}

	public function fualAmount(){
		return $this->fualAmount;
		echo "<br>";
	}

	public function litter(){
		
		$this->totalAmount=$this->capacity+$this->fualAmount+ self::LI;
		echo "totalAmount Is :".$this->totalAmount;
		echo "<br>";



	}
	public function distance($kl){
        //$distance=$this->litter()-$kl;
		//$distance=$totalAmount - $liter;	
		$distance=$this->totalAmount-$kl;
		echo "Distance is :".$distance;
		echo "<br>";

	}
}