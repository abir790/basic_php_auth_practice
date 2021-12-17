<a href="vehicle.php">Vehicle</a>
<?php 
require 'vehicle.php';
require 'use_trait.php';
//require 'vendor\autoload.php';
//use App\Veh;

class Car extends vehicle{
	//use Veh; ////  ata avabe akhane hobe tokhoni jokhn ai class o akoi namespace a thakbe
	use App\Veh;
	
	
	public function __construct($capacity,$fualAmount,$liter,$colore){
		parent::__construct($capacity,$fualAmount,$liter);
	$total=$this->capacity+$this->fualAmount+$colore;

	echo " ......".$total;
	echo "<br>";
}
public function carPersonal(){
	//echo $this->bike; // ata vabe hobe na coz privete but
	$this->bike1;

	echo "This is protected $this->bike1 <br>";
	echo "this is self::LI  constant :".self::LI;
}

	public function litter(){
		
		parent::litter();
		echo "this halka change <br>";



	}
		

}

/*
$car=new Car(1,2,2,2);
$car->capacity('honda');
echo "<br>";
echo $car->litter();

$car->distance(4);
$car->carPersonal();
echo "<br>";
//$car->LI; avabe hobe na coz constant k object data call kora jay na claa name diye call kora jay
echo Car::LI;
echo "<br>";
echo $car->capacity;  //ata public oject diye call kora jabe
//echo $car->bike;   ata private so direct object diye call kora jabe na
//echo $car->bike1;  r ata protected so atao direct object diye call kora jabe na

*/


 ?>