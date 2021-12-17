<?php 

abstract class Guss{
	private $capa;
	protected $cc;
	public function test($capa,$cc){
		$this->capa=$capa;
		$this->cc=$cc;
		return $cc.$capa;

	}


	abstract public function car();
	abstract public function bus();
}


 ?>