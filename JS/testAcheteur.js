	var envoi=true;
	function test(){
	var input1=document.getElementById("id-acheteur").value;
	var input2=document.getElementById("nom").value;
	var input3=document.getElementById("compte").value;
		
	//Pour Verifier input2 Si il contient un nombre
	var contientNombres = false;
	var longeurVal=input2.length;
		
	//tester l'id-acheteur
	if(isNaN(input1)){
	document.body.style.backgroundColor="red";
	document.getElementById("IdNan").style.display="inline";
	} else {
	document.getElementById("IdNan").style.display="none";	
	}
	
	//tester le compte
	if(isNaN(input3)){
	document.getElementById("CompteNan").style.display="inline";
	} else {
	document.getElementById("CompteNan").style.display="none";	
	}
	
	// verfier si la valeur du nom contient un nombre
	for (var i=0; i<longeurVal ;i++){
		// Si oui , contientNombre devient True
		if (!isNaN(input2.charAt(i))){
			contientNombres=true;
		}
	}
		
	//Si contientNombre est vraie alors afficher le msg d'erreur
	if(contientNombres) {
	document.getElementById("NomNum").style.display="inline";
	} else {
		document.getElementById("NomNum").style.display="none";
	}
	
	// test si il ya une seule erreur = modifier la couleur du background et blocker l'envoi 'envoi= flase'	
	if (isNaN(input1) || isNaN(input3) || contientNombres){
		document.body.style.backgroundColor="red";
	envoi=false;
		} else {
	document.body.style.backgroundColor="#2b2b2b";
	envoi=true;
		}
		} 

	// fonction qui block l'envoi si il ya une erreur ou un champ n'est pas initaliser
	function testEnvoi(){
		if (document.getElementById("id-achat").value=="" || document.getElementById("id-produit").value=="" || document.getElementById("id-acheteur").value=="") {return false;}
		else {return envoi;}
		}