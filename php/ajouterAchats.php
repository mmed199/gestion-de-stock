<?php
	//Ajout ou Modification des enregistrement du Table achats


	// verification si un champ est vide
	if (!empty($_POST['id-achat']) AND !empty($_POST['id-acheteur']) AND !empty($_POST['id-produit']) ){
	// connexion
	$c=mysqli_connect("localhost","root","","superMarche");
		if($c){
			// chercher si l'ID existe deja
			$s="SELECT count(*) FROM `achats` WHERE `Id_achat`='".$_POST['id-achat']."'";
			$count=mysqli_query($c,$s);
			$l=mysqli_fetch_assoc($count);
			// Si oui modifier l'enregistrement qui a ce ID
			if ($l["count(*)"]==0){	
				$t="INSERT INTO `achats` (`Id_achat`, `Id_achateur`, `Id_produit`) values ('".$_POST['id-achat']."','".$_POST['id-acheteur']."','".$_POST['id-produit']."')";
				$r=mysqli_query($c,$t);
			} 
			// Sinon ajouter un nouveau enregistrement 
			else {
				$t="UPDATE `achats` SET `Id_achateur` = '".$_POST['id-acheteur']."' ,  `Id_produit`='".$_POST['id-produit']." ' WHERE `achats`.`Id_achat` = ".$_POST['id-achat'];
				$r=mysqli_query($c,$t);
			}
			// fermer la connexion
			mysqli_close($c);
		}
		else {
			// message d'erreur
			echo "erreur connection";
		}
	//aller a la page Achats
	header("location: ../pages/achats.php");
	}
?>