<?php 

class Bookstatic{
	public static $pen;
	public static $pencil;

	public static function penCount($pen){
		self::$pen=$pen;  // jodi avabe define kori tahole
		//$this->pen=$pen; 
		self::$pen='pp';
		return $pen;
		//return self::$pen;   // avabe return hobe na but jodi define na kori tahole hobe

	} 
	public static function pencilCount($pencil){
		self::$pencil=$pencil;
		return $pencil;

	}
}


//echo Bookstatic::$pen;
/*
Bookstatic::$pen='alpin ';
$book=new Bookstatic();
//echo $book->penCount('materdro');
//echo $book->penCount('mater');
echo "<br>";
echo Bookstatic::$pen;
echo "<br>";
//echo Bookstatic::$pen='alpin ';

$book1=new Bookstatic();

echo Bookstatic::$pen;
echo "<br>";
echo Bookstatic::penCount('lll');
*/
 ?>