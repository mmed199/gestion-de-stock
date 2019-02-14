<?php
	//Ajout ou Modification des enregistrement du Table acheteurs


	// verification si un champ est vide
	if (!empty($_POST['id-produit']) AND !empty($_POST['libelle']) AND !empty($_POST['prix']) ){
	// connexion
	$c=mysqli_connect("localhost","root","","superMarche");
		if($c){
			// chercher si l'ID existe deja
			$s="SELECT count(*) FROM `produits` WHERE `Id_produit`='".$_POST['id-produit']."'";
			$count=mysqli_query($c,$s);
			$l=mysqli_fetch_assoc($count);
			// Si oui modifier l'enregistrement qui a ce ID
			if ($l["count(*)"]==0){	
				$t="INSERT INTO `produits` (`Id_produit`, `Libelle`, `Prix`) values ('".$_POST['id-produit']."','".$_POST['libelle']."','".$_POST['prix']."')";
				$r=mysqli_query($c,$t);
			} 
			// Sinon ajouter un nouveau enregistrement 
			else {
				$t="UPDATE `produits` SET `Libelle` = '".$_POST['libelle']."' , `Prix`='".$_POST['prix']." ' WHERE `produits`.`Id_produit` = ".$_POST['id-produit'];
				$r=mysqli_query($c,$t);
			}
			// fermer la connexion
			mysqli_close($c);
		}
		else {
			// message d'erreur
			echo "erreur connection";
		}
	//aller a la page produits
	header("location: ../pages/produits.php");
	}
?>