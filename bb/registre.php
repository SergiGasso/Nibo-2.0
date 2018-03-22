<?php
	/*include("conexion.php");*/

	$host = "localhost";
	$user = "ninoborracho";
	$pw = "123qwe";
	$db = "ninoborracho";

	if(isset($_POST['titol']) && !empty($_POST['titol']) &&
	isset($_POST['desc']) && !empty($_POST['desc']))
	{
		$titol = $_POST['titol'];
		$desc = $_POST['desc'];
		$resp = $_POST['resp'];
		$descresp = $_POST['descresp'];
		$con=mysqli_connect($host,$user,$pw) or die("Problema");
		mysqli_select_db($con,$db) or die("problema");
		
		$sql = "INSERT INTO post(Titol,Descripcio,Resposta,DescripcioResposta) VALUES ('$titol','$desc','$resp','$descresp')";

		
		mysqli_query($con, $sql);
		echo "datos insertados";
	}
	else{
		echo"problemas al insertar datos";
	}
	mysqli_close($con);

?>