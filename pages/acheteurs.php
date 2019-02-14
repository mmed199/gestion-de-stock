<html>
<head>
	<title>Table Acheteurs</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="../CSS/stylePages.css" type="text/css" />
	</head>

	<body>
	<!-- Ajouter un header -->
	<?php include("../php/header.php") ?>
	<div>
	<section id="navigateur">
	<!-- Liste de navigation -->
		<ul>
			<li><a href=".." class="nav">Accueil</a></li>
			<li><a href="acheteurs.php" class="nav" id="current">Acheteurs</a></li>
			<li><a href="achats.php" class="nav">Achats</a></li>
			<li><a href="produits.php" class="nav" id="produits">produits</a></li>
		</ul>
	</section>
	<section id="tableau">
		<!-- lien vers ajoutAcheteurs -->
		<a href="ajoutAcheteurs.php" id="lienAjout">Ajouter ou Modifier un acheteur?</a>
		<table>
		<!-- l'entete de tableau -->
		<tr>
			<th >ID Achateur</th>
			<th>Nom</th>
			<th>Compte</th>
		</tr>
			<!-- Slection des champs du base de donnnes -->
			<?php 
			$c=mysqli_connect("localhost","root","","superMarche");
			if($c){
			$r=mysqli_query($c,"SELECT * FROM Achateurs");		

				while($l=mysqli_fetch_assoc($r)){
				echo "<tr>";
				echo "<td>".$l["Id_acheteur"]."</td>";
				echo "<td>".$l["Nom"]."</td>";
				echo "<td>".$l["Compte"]."</td>";
					
			// Chaque enregistrement a son lien un script qui le supprime
			// On passe avec la methode GET l'id et le nom du table a un script qui demande un verification par l'utilisateur
			// Puis il passe a un scripte qui utilise le nom de table et l'id d'enregistrement pour le supprime
					
				echo '<td class="supprimer">
				<img src="../images/supprimer.png" class="imgSupp">
				<a class="lienSupp" onsumbit="return delete()" href="../php/test.php?table=acheteurs&id='.$l["Id_acheteur"].'">supprimer</a>';
				echo "</tr>"; }
				mysqli_close($c);
				 }
			else {
				echo "erreur";
			}?>
		</table>
	</section>

	</div>
	</body>

</html>