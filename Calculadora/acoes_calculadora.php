<?php 

	$num           = "";
	$cookie_nome1  = "num";
	$cookie_valor1 = "";
	$cookie_nome2  = "op";
	$cookie_valor2 = "";

	$num = isset($_POST['display']) ? $_POST['display'] : '';
	$num = isset($_POST['submit'])  ? $_POST['display'] . $_POST['submit'] : '';

	if (isset($_POST['op'])) {

		$cookie_valor1 = $_POST['display'];
		setcookie($cookie_nome1, $cookie_valor1);

		$cookie_valor2 = $_POST['op'];
		setcookie($cookie_nome2, $cookie_valor2);

		$num = "";
	}

	if (isset($_POST['igual'])) {
		$num = $_POST['display'];

		switch ($_COOKIE["op"]) {
			case "+":
				$resultado = $num + $_COOKIE['num'];
				break;
			case "/":
				$resultado = $num / $_COOKIE['num'];
				break;
			case "-":
				$resultado = $num - $_COOKIE['num'];
				break;
			case "x":
				$resultado = $num * $_COOKIE['num'];
				break;	
		}
		$num = $resultado;
	}
?>