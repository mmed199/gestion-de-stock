	var envoi=true;
	function test(){
	var input1=document.getElementById("id-produit").value;
	var input3=document.getElementById("prix").value;
		
	
	if(isNaN(input1)){
	document.body.style.backgroundColor="red";
	document.getElementById("IdNan").style.display="inline";
	} else {
	document.getElementById("IdNan").style.display="none";	
	}
		
	if(isNaN(input3)){
	document.getElementById("PrixNan").style.display="inline";
	} else {
	document.getElementById("PrixNan").style.display="none";	
	}

	
	if (isNaN(input1) || isNaN(input3)){
		document.body.style.backgroundColor="red";
	envoi=false;
		} else {
	document.body.style.backgroundColor="#2b2b2b";
	envoi=true;
		}
		} 
	function testEnvoi(){
		if (document.getElementById("id-produit").value=="" || document.getElementById("libelle").value=="" || document.getElementById("prix").value=="") {return false;}
		else {return envoi;}
		}