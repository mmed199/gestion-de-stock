<?php
	//Ajout ou Modification des enregistrement du Table acheteurs


	// verification si un champ est vide
	if (!empty($_POST['id-acheteur']) AND !empty($_POST['nom']) AND !empty($_POST['compte']) ){
	// connexion
	$c=mysqli_connect("localhost","root","","superMarche");
		if($c){
			// chercher si l'ID existe deja
			$s="SELECT count(*) FROM `achateurs` WHERE `Id_acheteur`='".$_POST['id-acheteur']."'";
			$count=mysqli_query($c,$s);
			$l=mysqli_fetch_assoc($count);
			// Si oui modifier l'enregistrement qui a ce ID
			if ($l["count(*)"]==0){	
				$t="INSERT INTO `achateurs` (`Id_acheteur`, `Nom`, `Compte`) values ('".$_POST['id-acheteur']."','".$_POST['nom']."','".$_POST['compte']."')";
				$r=mysqli_query($c,$t);
			} 
			// Sinon ajouter un nouveau enregistrement 
			else {
				$t="UPDATE `achateurs` SET `Nom` = '".$_POST['nom']."' ,  `Compte`='".$_POST['compte']." ' WHERE `achateurs`.`Id_acheteur` = ".$_POST['id-acheteur'];
				$r=mysqli_query($c,$t);
			}
			// fermer la connexion
			mysqli_close($c);
		}
		else {
			// message d'erreur
			echo "erreur connection";
		}
	//aller a la page Acheteurs
	header("location: ../pages/acheteurs.php");
	}
?>