<a href="car.php">Car</a>
<a href="bus.php">Bus</a>
<?php 


class Vehicle{
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


//$vehi=new Vehicle(9,2,3);

//echo $vehi->litter();
//$vehi->distance(4);
//echo "capacity is :" .$vehi->capacity();



 ?>
