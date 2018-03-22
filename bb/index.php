
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "ninoborracho", "123qwe", "ninoborracho");
$result = $conn->query("SELECT Titol, Descripcio FROM post");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	if ($outp != "") {$outp .= ",";}
		$outp .= $rs["Titol"];
		$outp .= $rs["Descripcio"];
		}

	$outp =$outp;
	$conn->close();
	echo($outp);
?>
