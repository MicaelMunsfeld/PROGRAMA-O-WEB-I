<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora em PHP</title>
</head>

<?php include("./acoes_calculadora.php"); ?>

<body>

	<form action="#" method="POST">	
		<table border="3"> 
			<tr>
				<td colspan="4">
					<input type="number" name="display" value="<?php echo $num; ?>">
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="7" ></td>
				<td><input type="submit" name="submit" value="8" ></td>
				<td><input type="submit" name="submit" value="9" ></td>
				<td><input type="submit" name="op"     value="/"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="4"></td>
				<td><input type="submit" name="submit" value="5"></td>
				<td><input type="submit" name="submit" value="6"></td>
				<td><input type="submit" name="op"     value="+"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="1" ></td>
				<td><input type="submit" name="submit" value="2" ></td>
				<td><input type="submit" name="submit" value="3" ></td>
				<td><input type="submit" name="op"     value="-"></td>
			</tr>	
			<tr>
				<td><input type="submit" name="submit" value="0"></td>
				<td><input type="submit" name="submit" value="c"></td>
				<td><input type="submit" name="igual"  value="="></td>
				<td><input type="submit" name="op"     value="x"></td>
			</tr>
		</table>	
	</form>

</body>

</html>