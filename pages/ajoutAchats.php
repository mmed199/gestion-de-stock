<html>
<head>
	<title>Ajouter ou modifier des achats</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="../CSS/stylePages.css" type="text/css" />
	<script src="../JS/testAchat.js"></script>
	</head>

	<body>
	<!-- Ajouter un header -->
	<?php include("../php/header.php") ?>
	<div>
	<!-- Liste de navigation -->
		<section id="navigateur">
			<ul>
				<li><a href="acheteurs.php" class="nav"  >Acheteurs</a></li>
				<li><a href="achats.php" class="nav" id="current">Achats</a></li>
				<li><a href="produits.php" class="nav" id="produits">produits</a></li>
			</ul>
		</section>
		<section>
			<!-- formulaire d'ajout ou modification table achateur-->
			<!-- a chaque modifiaction d'un input on test les valeurs pour afficher un message d'erreur -->
			<!-- on peut pas envoyer les valeur si une n'est pas intialiser -->
			<form action="../php/ajouterAchats.php" method="post" onsubmit="return testEnvoi();">
			<label>
				Pour Modifier un enregistrement , tapez son ID au champ ID Achat et tapez le nouveau ID acheteur et ID produit
				</label>
				
			<br>
			<!-- champ id achat -->
				<label for="id-achat" >ID Achat</label>
			<!-- message d'erreur 1 : -->	
				<span id="Id1Nan">Tapez un nombre <br></span>
				<input type="text" id="id-achat" name="id-achat" onChange="javascript: test()">
			<!-- champ id Acheteur -->
				<label for="id-acheteur" >ID Acheteur</label>
			<!-- message d'erreur 2 : -->					
				<span id="Id2Nan">Tapez un nombre<br></span>
				<input type="text" id="id-acheteur" name="id-acheteur" onChange="javascript: test()" >
			<!-- champ id produit -->
				<label for="id-produit" >ID produit</label>
			<!-- message d'erreur 3 : -->					
				<span id="Id3Nan">Tapez un nombre <br></span>
				<input type="text" id="id-produit" name="id-produit" onChange="javascript: test()">
				
				<input type="submit" value="Ajouter" >
			</form>
		 </section>

	</div>
	</body>

</html>