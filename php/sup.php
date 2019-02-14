<?php 
//Supprimer un enregistrement d'un table - d'un id passe par la methode get 
//Apres Confirmation d'utilisateur (methode JS confirm) - page test.php

//Verifier si une valeur n'est pas initaliser
if(!empty($_GET['table']) && !empty($_GET['id'])){
	//connexion
	$c=mysqli_connect("localhost","root","","superMarche");
	// verification 
	if($c){
		// Si la table passe est 'Acheteurs':
		if(($_GET['table'])=='acheteurs'){
				$t="DELETE FROM achateurs where Id_acheteur=".$_GET['id'];
				$r=mysqli_query($c,$t);
				mysqli_close($c);
				header("location: ../pages/acheteurs.php");
				} 
		// Si la table passe est 'Produits':
		else if(($_GET['table'])=='produits'){
				$t="DELETE FROM produits where Id_produit=".$_GET['id'];
				$r=mysqli_query($c,$t);
				mysqli_close($c);
				header("location: ../pages/produits.php");
				}
		// Si la table passe est 'Achats':
		else if(($_GET['table'])=='achats'){
				$t="DELETE FROM achats where Id_achat=".$_GET['id'];
				$r=mysqli_query($c,$t);
				mysqli_close($c);	
				header("location: ../pages/achats.php");
				}
		// Si la table passe n'existe pas = l'utilisateur a modifie le lien
		else {
				echo "table n'existe pas";
				}
			}
			else {
				echo "erreur connection";

			}
		} else {
		// Si un valeur n'est pas initaliser = l'utilisateur a modifie le lien
				echo ("erreur de suppression");
			}
?>	