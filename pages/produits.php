<html>
<head>
	<title>Table Produits</title>
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
			<li><a href="acheteurs.php" class="nav" >Acheteurs</a></li>
			<li><a href="achats.php" class="nav">Achats</a></li>
			<li><a href="produits.php" class="nav" id="current">produits</a>
			</li>
		</ul>
		</section>
	<section id="tableau">
		<!-- lien vers ajoutAcheteurs -->
		<a href="ajoutProduits.php" id="lienAjout">Ajouter ou Modifier un produit?</a>	
		
		<table>
		<!-- l'entete de tableau -->
		<tr>
			<th >ID Produit</th>
			<th>Libelle</th>
			<th>Prix</th>
		</tr>
			<!-- Slection des champs du base de donnnes -->
		<?php 
		$c=mysqli_connect("localhost","root","","superMarche");
		if($c){
		$r=mysqli_query($c,"SELECT * FROM Produits");		
			
			while($l=mysqli_fetch_assoc($r)){
			echo "<tr>";
			echo "<td>".$l["Id_produit"]."</td>";
			echo "<td>".$l["Libelle"]."</td>";
			echo "<td>".$l["Prix"]." DH</td>";

			// Chaque enregistrement a son lien un script qui le supprime
			// On passe avec la methode GET l'id et le nom du table a un script qui demande un verification par l'utilisateur
			// Puis il passe a un scripte qui utilise le nom de table et l'id d'enregistrement pour le supprime
									
			echo '<td class="supprimer">
			<img src="../images/supprimer.png" class="imgSupp">
			<a class="lienSupp" href="../php/test.php?table=produits&id='.$l["Id_produit"].'">supprimer</a></td>';
			echo "</tr>"; }
			mysqli_close($c);
			 }
		else {
			echo "erreur";
		}
			
			?>
		</table> </section>

	</div>
	</body>

</html>