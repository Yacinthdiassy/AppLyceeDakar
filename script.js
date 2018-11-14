function validation() {
    var nom = document.forms["monFormformulaire"]["nom"].value;
    var prenom = document.forms["monFormformulaire"]["prenom"].value;
    var phone = document.forms["monFormformulaire"]["phone"].value;
    var email = document.forms["monFormformulaire"]["email"].value;
    if(nom == ""||prenom == ""||phone == ""||email == ""){

	    
	    if (nom == "") {
	       var vnom = document.getElementById("msNom");
	       vnom.innerHTML="Ce champ ne doit pas etre vide";
	       document.getElementById("nom").focus();
		}
	   	
	   	else{
	   		var vnom = document.getElementById("msNom");
	   		vnom.innerHTML="";
	   	}
	    

	    if (prenom == "") {
	       var vprenom = document.getElementById("msPrenom");
	       vprenom.innerHTML="Ce champ ne doit pas etre vide";
	       document.getElementById("prenom").focus();
	    }
	    else{
	       var vprenom = document.getElementById("msPrenom");
	       vprenom.innerHTML="";
	    }

	    if (phone == "") {
	       var vphone = document.getElementById("msPhone");
	       vphone.innerHTML="Ce champ ne doit pas etre vide";
	       document.getElementById("phone").focus();
	    }
	    else{
	       var vphone = document.getElementById("msPhone");
	       vphone.innerHTML="";
	    }

	    if (email == "") {
	       var vemail = document.getElementById("msEmail");
	       vemail.innerHTML="Ce champ ne doit pas etre vide";
	       document.getElementById("email").focus();
	    }
	    else {
	       var vemail = document.getElementById("msEmail");
	       vemail.innerHTML="";
	    }
	    return false;
	}


}