<script>
// confirmer la suppression

if(confirm("Voulez-vous supprimer ce champ?")){
	// Si oui passer l'ID d'enregistrement et la table au script PHP sup.php pour supprimer le champ
	var lien="sup.php?table=<?php echo $_GET['table'];?>&id=<?php echo $_GET['id']; ?>";
	document.location.replace(lien);
} else {
	// Sinon retourner a la page precedante
	window.history.back();
}

</script>