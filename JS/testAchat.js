	var envoi=true;
	function test(){
	var input1=document.getElementById("id-achat").value;
	var input2=document.getElementById("id-acheteur").value;
	var input3=document.getElementById("id-produit").value;
	
	// test l'id-achat
	if(isNaN(input1)){
	document.body.style.backgroundColor="red";
	document.getElementById("Id1Nan").style.display="inline";
	} else {
	document.getElementById("Id1Nan").style.display="none";	
	}
	
	//test l'id-acheteur
	if(isNaN(input2)){
	document.getElementById("Id2Nan").style.display="inline";
	} else {
	document.getElementById("Id2Nan").style.display="none";	
	}
	
	//test l'id-produit
	if(isNaN(input3)){
	document.getElementById("Id3Nan").style.display="inline";
	} else {
	document.getElementById("Id3Nan").style.display="none";	
	}
	
	// test si il ya une seule erreur = modifier la couleur du background et blocker l'envoi 'envoi= flase'
	if (isNaN(input1) || isNaN(input2) || isNaN(input3)){
		document.body.style.backgroundColor="red";
		envoi=false;
	} else {
		document.body.style.backgroundColor="#2b2b2b";
		envoi=true;
	}
		} 


	// fonction qui block l'envoi si il ya une erreur ou un champ n'est pas initaliser
	function testEnvoi(){
		if (document.getElementById("id-acheteur").value=="" || document.getElementById("nom").value=="" || document.getElementById("compte").value=="") {return false;}
		else {return envoi;}
		}