<?php
	include "class.php";
	$vhitung= new konversi;
	$vhitung->angka=$_POST['angka'];
	$vhitung->op=$_POST['cmbop'];
	$vhitung->utama();
	
	?>