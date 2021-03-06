<!DOCTYPE html>
<html>
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta name="description" content="Lorem Ipsum" />
	<meta name="author" content="Lorem Ipsum" />
	<meta name="keywords" content="keywords">
	<!--Angular-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
	<!-- Javascript-->
	<script type="text/javascript" src="js/javascript.js"></script>
	
	<!-- favicon -->
	<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
	<title>Niño o Borracho</title>
</head>
<body>
<!--("FUNCIO")MenuDespegable-->
<div id="MenuDespegable" class="MenuPerfil">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="Perfil.html" onfocus="FuncioPerfil()" ><span><img id="iPerfil" src="recursos/img/24638-1.png" width="30" height="30"></span>Perfil</a>
		<a href="Logros.html" onfocus="FuncioLogros()"><span><img id="iLogros" src="recursos/img/medal-icon.png" width="30" height="30"></span>Logros</a>
		<a href="MisPosts.html" onfocus="FuncioPost()"><span><img id="iPost" src="recursos/img/post.png" width="30" height="30"></span>Mis Posts</a>
		<a href="Ranking.html" onfocus="FuncioPodium()"><span><img id="iPodium"  src="recursos/img/podium.png" width="30" height="30"></span> Ránking</a>
	</div>
		
	<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
	<div id="push">

		<div id="menus">
		
			<ul>
				<li>
				<!-- Use any element to open the sidenav -->
				<span onclick="openNav()"><img src="recursos/img/3linies menu.png" heigt="45" width="40"></span>
				</li>
	
				<li><a href="home.html" class="active">INICIO</a></li>
				<li><a href="LosMejores.html">LOS MEJORES</a></li>
				<li><a href="Aleatorio.html">ALEATORIO</a></li>
				<li><a href="Moderar.html">MODERAR</a></li>
				<li><a href="Publicar.html">PUBLICAR</a></li>
				<li style="float:right"><a class="active" href="conectarse.html">Conectarse</a></li>
			</ul>
			
			<div class="header">
				<div class="progress-container">
					<div class="progress-bar" id="myBar"></div>
				</div> 
			</div>
			
		</div> 
	
	
		<div id="contingut">

			<?php

			$conn = new mysqli("localhost", "ninoborracho", "123qwe", "ninoborracho");
			$result = $conn->query("SELECT Titol, Descripcio, Resposta, DescripcioResposta FROM post");

			$outp = "";
			while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
				if ($outp != "") {$outp .= "";}
					$outp .= "<div class='quadre'>";
					$outp .= "<div class='nick'>".$rs["Titol"]."</div>";
					$outp .= "<div class='desc'>".$rs["Descripcio"]."</div>";
					$outp .= "  - ";
					$outp .= $rs["Resposta"];
					$outp .= "</div>";
					$outp .= "
						<div class='container'>
							<div class='boto1'>
								<div class='lletraboto'>Niño</div>
							</div> 
							<div class='boto2'>
								<div class='lletraboto'>Borracho</div>
							</div>
						</div>";
					$outp .= $rs["DescripcioResposta"];
					$outp .= "<br>"."<br>";
					
					
					}
				$outp =$outp;
				$conn->close();
				echo($outp);
			?>
		</div>
	</div>
</body>
</html>