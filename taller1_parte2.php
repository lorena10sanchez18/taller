<?php
	
	echo "Taller 1 parte 2;
	<br><br>";

	$num1 = -10;

	//punto a
	if($num1 < 0) {
		echo "El numero evaluado es negativo";
		<br><br>;
	}else {
		echo "El numero evaluado no es negativo";
		<br><br>;
	}

	//punto b
	$var = true;

	if($var) {
		echo "Verdadero";
		<br><br>;
	}else {
		echo "Falso";
		<br><br>;
	}

	//punto c
	$valor = 6;
	$primo = 0;
	 
	for ($b = 1; $b < $valor; $b++) {
	    if ($valor % $b == 0) {
	        $primo++;
	    }
	}
	 
	if ($primo >= 2) {
	    echo "El numero ".$valor." no es primo";
	    <br><br>;
	} else {
	    echo " El numero ".$valor." es primo";
	    <br><br>;
	}

	//punto d
	$num2 = 70;

	if($num2 > 35) {
		echo "el numero".$num2." es mayor que 35";
		<br><br>;
	}else {
		echo "el nuemro".$num2." es menor que 35";
		<br><br>;
	}

	//punto e
	$num3 = 10;

	if($num3 >= 0 && $num3 < 100) {
		echo "el numero".$num3." es positivo y menor que 100";
		<br><br>;
	}else {
		echo "el numero".$num3." es negativo y menor que 100";
		<br><br>;
	}

	//punto f
	$num4 = 15;

	if($num4 >= -3 && $num4 <= 27) {
		echo "el numero".$num4." pertenece al intervalo -3, 27";
		<br><br>;
	}else {
		echo "el numero".$num4." no pertenece al intervalo -3, 27";
		<br><br>;
	}

	//punto g
	$num5 = 25;

	if($num5 >= 25 && $num5 <= 50) {
		echo "el numero ".$num5." pertenece al intervalo 25, 50";
		<br><br>;
	}else {
		echo "el numero".$num5." no pertenece al intervalo 25, 50";
		<br><br>;
	}

	//punto h
	$num6 = 14;

	if($num6 % 1 < 15) {
		echo "El modulo de ".$num6." es menor que 15";
		<br><br>;
	}else {
		echo "El modulo de ".$num6." es mayor que 15";
		<br><br>;
	}

	//punto i
	$num7 = 60;

	if($num7 % 2 == 0) {
		echo "el numero".$num7." no es un numero impar";
		<br><br>;
	}else {
		echo "el numero".$num7." es un numero impar";
		<br><br>;
	}

	//punto j
	$num8 = 7;
	$resultado;

	if($num8 % 2 == 0) {
		$resultado = $num8 ** 2;
		echo "El resultado de elevar ".$num8." al cuadrado es ".$resultado;
		<br><br>;
	}else {
		$resultado = $num8 ** 3;
		echo "El resultado de elevar ".$num8." al cubo es ".$resultado;
		<br><br>;
	}

	//punto k
	$num9 = 75;
	$num10 = 18;

	if($num9 < $num10) {
		echo "El maximo entre ".$num9." y ".$num10." es ".$num10;
		<br><br>;
	}else {
		echo "El maximo entre ".$num9." y ".$num10." es ".$num9;
		<br><br>;
	}

	//punto l
	$num11 = 28;
	$num12 = 7;
	$num13 = 42;

	if($num11 < $num12 && $num12 > $num13) {
		echo "El maximo entre ".$num11.", ".$num12." y ".$num13." es ".$num12;
		<br><br>;
	}else if($num11 > $num12 && $num11 > $num13) {
		echo "El maximo entre ".$num11.", ".$num12." y ".$num13." es ".$num11;
		<br><br>;
	}else if($num11 < $num12 && $num12 < $num13) {
		echo "El maximo entre ".$num11.", ".$num12." y ".$num13." es ".$num13;
		<br><br>;
	}

	//punto m
	$num14 = 18;
	$num15 = 11;

	if($num14 < $num15) {
		echo "Orden de menor a mayor ".$num14.", ".$num15;
		<br><br>;
	}else {
		echo "Orden de menor a mayor ".$num15.", ".$num14;
		<br><br>;
	}

	//punto n
	$num16 = 1115;
	$num17 = 2016;
	$num18 = 2440;

	if($num16 > $num17 && $num17 > $num18) {
		echo "Orden de mayor a menor ".$num16.", ".$num17.", ".$num18;
		<br><br>;
	}else if($num16 < $num17 && $num17 < $num18) {
		echo "Orden de mayor a menor ".$num18.", ".$num17.", ".$num16;
		<br><br>;
	}else if($num16 < $num17 && $num18 < $num16) {
		echo "Orden de mayor a menor ".$num17.", ".$num16.", ".$num18;
		<br><br>;
	}else if($num16 < $num17 && $num18 > $num16) {
		echo "Orden de mayor a menor ".$num17.", ".$num18.", ".$num16
		<br><br>;
	}else if($num16 > $num18 && $num18 > $num17) {
		echo "Orden de mayor a menor ".$num16.", ".$num18.", ".$num17;
		<br><br>;
	}else if($num16 < $num18 && $num16 > $num17) {
		echo "Orden de mayor a menor ".$num18.", ".$num16.", ".$num17;
		<br><br>;
	}

	//punto o
	// OJO strlen($cadena) determina el numero de caracteres que componen una cadena de texto
	$cadena = "happy";
	
	if(strlen($cadena) > 5) {
		echo "La longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es largo";
		<br><br>;
	}else {
		echo "La longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es corto";
		<br><br>;
	}

	//punto p
	// OJO   isset($miVariable) determina si la variable contenida como parametro existe y no es nulo (null)
	if(isset($laVariable)) {
		echo "La variable existe";
		<br><br>;
	}else {
		echo "La variable no existe";
		<br><br>;
	}

	//punto q
	// OJO   empty($variable) determina si la variabla contenida como parametro contiene informacion
	$variable;

	if(empty($variable)) {
		echo "La variable se encuentra vacia";
		<br><br>;
	}else {
		echo "La variable contiene informacion";
		<br><br>;
	}
?>
