<?php

abstract class Computadores{

	public $Computadores;

}

class Desktop extends Computadores{

	public function __construct(){
		$this->Computadores= "<b>Tipo:</b> <i>Computador de Mesa</i> <br>";
	}	
}

class Portatil extends Computadores{

	public function __construct(){
		$this->Computadores = "<b>Tipo:</b> <i>Computador Portatil</i> <br>";
	}

}

class AllInOne extends Computadores{

	public function __construct(){
		$this->Computadores = "<b>Tipo:</b> <i>Computador Todo en Uno</i> <br>";
	}

}



abstract class Estilo{
	

	public abstract function EstilodeComputadores($Computadores);

}

class Gamer extends Estilo {

	public function EstilodeComputadores($Computadores){
		echo $Computadores->Computadores."<b>Estilo:</b> <i>Gamer</i> <br>";
	}
}

class Profesional extends Estilo {

	public function EstilodeComputadores($Computadores){
		echo $Computadores->Computadores."<b>Estilo:</b> <i>Profesional</i> <br>";
	}
}


abstract class ComputadoresAbstractFactory{

	public abstract function crearComputadores();
	public abstract function crearEstilo();

}

class FactoryDesktopGamer extends ComputadoresAbstractFactory{

	public function crearComputadores(){

		return new Desktop();
	}

	public function crearEstilo(){
		return new Gamer();
	}
}

class FactoryDesktopProfesional extends ComputadoresAbstractFactory{

	public function crearComputadores(){

		return new Desktop();
	}

	public function crearEstilo(){
		return new Profesional();
	}
}

class FactoryPortatilGamer extends ComputadoresAbstractFactory{

	public function crearComputadores(){

		return new Portatil();
	}

	public function crearEstilo(){
		return new Gamer();
	}
}

class FactoryPortatilProfesional extends ComputadoresAbstractFactory{

	public function crearComputadores(){

		return new Portatil();
	}

	public function crearEstilo(){
		return new Profesional();
	}
}
class FactoryAllInOneGamer extends ComputadoresAbstractFactory{

	public function crearComputadores(){

		return new AllInOne();
	}

	public function crearEstilo(){
		return new Gamer();
	}
}

class FactoryAllInOneProfesional extends ComputadoresAbstractFactory{

	public function crearComputadores(){

		return new AllInOne();
	}

	public function crearEstilo(){
		return new Profesional();
	}
}

class EnsamblajeComputadores{

	public function __construct($abs){
		$Estilo = $abs->crearEstilo();
		$Computadores = $abs->crearComputadores();
		$Estilo->EstilodeComputadores($Computadores);
	}
}



?>