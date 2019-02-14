<html>
<head>
	<title>Ajouter ou modifier des acheteurs</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="../CSS/stylePages.css" type="text/css" />
	<script src="../JS/testProduit.js"></script>
	</head>

	<body>
	<!-- Ajouter un header -->
	<?php include("../php/header.php") ?>
	<div>
	<!-- Liste de navigation -->
		<section id="navigateur">
			<ul>
				<li><a href="acheteurs.php" class="nav" >Acheteurs</a></li>
				<li><a href="achats.php" class="nav" >Achats</a></li>
				<li><a href="produits.php" class="nav" id="current">produits</a></li>
			</ul>
		</section>
		<section>
			<!-- formulaire d'ajout ou modification table achateur-->
			<!-- a chaque modifiaction d'un input on test les valeurs pour afficher un message d'erreur -->
			<!-- on peut pas envoyer les valeur si une n'est pas intialiser -->
			<form action="../php/ajouterProduits.php" method="post" onsubmit="return testEnvoi();">
			<label>
				Pour Modifier un enregistrement , tapez son ID au champ ID produit et tapez le nouveau Libelle et prix
				</label>
				
			<br>
			<!-- champ id acheteur -->
				<label for="id-produit" >ID Produit</label>
			<!-- message d'erreur 1 : -->	
				<span id="IdNan">Tapez un nombre <br></span>
				<input type="text" id="id-produit" name="id-produit" onChange="javascript: test()">
			<!-- champ Libelle -->
				<label for="libelle" >Libelle</label>
			<!-- le libelle peut contenir n'importe quel chaine -->
				<input type="text" id="libelle" name="libelle" >
			<!-- champ Compte -->
				<label for="prix" >Prix</label>
			<!-- message d'erreur 3 : -->					
				<span id="PrixNan">Tapez un nombre <br></span>
				<input type="text" id="prix" name="prix" onChange="javascript: test()">
				
				<input type="submit" value="Ajouter" >
			</form>
		 </section>

	</div>
	</body>

</html>