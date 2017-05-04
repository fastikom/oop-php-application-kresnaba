<?php
  class konversi
 {
  public $masuk;
  public $op;

  function utama ()
  {
   if ($this->op=="inc")
   	$hasil=$this->inc($this->angka);
   elseif ($this->op=="cm")
   	$hasil=$this->cm($this->angka);
   elseif ($this->op=="ft")
   	$hasil=$this->ft($this->angka);
   elseif ($this->op=="mil")
   	$hasil=$this->mil($this->angka);
   elseif ($this->op=="km")
   	$hasil=$this->km($this->angka);
   elseif ($this->op=="us")
   	$hasil=$this->us($this->angka);
   elseif ($this->op=="fmi")
   	$hasil=$this->fmi($this->angka);
   elseif ($this->op=="fm")
   	$hasil=$this->fm($this->angka);
   elseif ($this->op=="angs")
   	$hasil=$this->angs($this->angka);
   elseif ($this->op=="tc")
   	$hasil=$this->tc($this->angka);
   elseif ($this->op=="pc")
   	$hasil=$this->pc($this->angka);
	echo $hasil;
   }
	function inc ($masuk){
	$hsl=$masuk*39.37;
	return $hsl;
	}    

	function cm($masuk){
	$hsl=$masuk*100;
	return $hsl;
        }

	function ft ($masuk){
	$hsl=$masuk*3.28;
	return $hsl;
	}

	function mil ($masuk){	    
	$hsl=$masuk*3.28/5280;
	return $hsl;
	}

	function km ($masuk){
	$hsl=$masuk/1000;
	return $hsl; 
	}

	function US ($masuk){
	$hsl=$masuk*3.28/6076;
	return $hsl;
	}

   	function fmi ($masuk){
	$hsl=$masuk*10;
	return $hsl;
	}

	function fm ($masuk){
	$hsl=$masuk*10;
	return $hsl;
	}

	function angs ($masuk){
	$hsl=$masuk*10;
	return $hsl;
	}

	function tc ($masuk){
	$hsl=$panjang/946*10;
	return $hsl;
	}

	function pc ($masuk){
	$hsl=$panjang/3.09*10;
	return $hsl;
	}

 }
?>

 