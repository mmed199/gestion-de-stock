<html>
<head>
	<title>Ajouter ou modifier des acheteurs</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="../CSS/stylePages.css" type="text/css" />
	<script src="../JS/testAcheteur.js"></script>
	</head>

	<body>
	<!-- Ajouter un header -->
	<?php include("../php/header.php") ?>
	<div>
	<!-- Liste de navigation -->
		<section id="navigateur">
			<ul>
				<li><a href="acheteurs.php" class="nav" id="current" >Acheteurs</a></li>
				<li><a href="achats.php" class="nav" >Achats</a></li>
				<li><a href="produits.php" class="nav" id="produits">produits</a></li>
			</ul>
		</section>
		<section>
			<!-- formulaire d'ajout ou modification table achateur-->
			<!-- a chaque modifiaction d'un input on test les valeurs pour afficher un message d'erreur -->
			<!-- on peut pas envoyer les valeur si une n'est pas intialiser -->
			<form action="../php/ajouterAcheteurs.php" method="post" onsubmit="return testEnvoi();">
			<label>
				Pour Modifier un enregistrement , tapez son ID au champ ID Acheteur et tapez le nouveau Nom et Compte
				</label>
				
			<br>
			<!-- champ id acheteur -->
				<label for="id-acheteur" >ID Acheteur</label>
			<!-- message d'erreur 1 : -->	
				<span id="IdNan">Tapez un nombre <br></span>
				<input type="text" id="id-acheteur" name="id-acheteur" onChange="javascript: test()">
			<!-- champ nom -->
				<label for="nom" >Nom</label>
			<!-- message d'erreur 2 : -->					
				<span id="NomNum">Tapez un nom valide<br></span>
				<input type="text" id="nom" name="nom" onChange="javascript: test()" >
			<!-- champ Compte -->
				<label for="compte" >Compte</label>
			<!-- message d'erreur 3 : -->					
				<span id="CompteNan">Tapez un nombre <br></span>
				<input type="text" id="compte" name="compte" onChange="javascript: test()">
				
				<input type="submit" value="Ajouter" >
			</form>
		 </section>

	</div>
	</body>

</html>