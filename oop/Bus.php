<?php 

//namespace App;   ////  namespace sobar upore thakbe
require 'Alpa\pen.php';
//require 'vendor\autoload.php';
use App\Alpa\Pen;

//require 'use_trait.php'; /// akahane ata hobe coz trait k vendor diye hobe na
//require 'vendor\autoload.php'; vendor\autoload k sudhu object create koar somoy use kora hoy
//require 'not.php';

/*
class Bus extends car{   /// akhane bus class car and vehicle k extend korte parbe na coz ata namespace
	use Veh;   //   Veh jodi trait na hoy tahole ata k use kora jab na ...must trait hotei hobe


	public function test(){
		echo " this is test namespace";
	}


}*/


//$bus=new Bus(1,2,3,4);
//$bus->capacity('honda');

//echo $bus->f();


/*
class Bus{
	use Veh;
	//use App\Veh;   akhane avabe hobe na karon already upore namespace App -given . coa akta file er vitorei ase.


	public function test(){
		echo " this is test namespace";
	}
}

*/
/*
class Bus extends Not{


	public function test(){
		echo " this is test namespace";
	}


}*/

class Bus extends Pen{
	


	public function test(){
		echo " this is test namespace";
	}
}


 ?>