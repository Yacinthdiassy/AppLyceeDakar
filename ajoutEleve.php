<?php
	REQUIRE_ONCE("connexion.php");
	if(isset($_POST['matricule'])){//s'il a cliquer sur ajouter la 2eme fois
		$matricule=$_POST['matricule'];
		$prenomEleve=$_POST['prenom'];
		$nomEleve=$_POST['nom'];
		$sexeEleve=$_POST['sexe'];
		$dateNaissEleve=$_POST['date'];
		$classeEleve=$_POST['classe'];
		$req ="select count(*) as nb from eleve where matricule='$matricule'";
		$res = $conn->query($req);
		$compte = mysqli_fetch_array($res);
		$bool=true;
		if($compte['nb']>0){
			$bool=false;
			echo '<h2>Erreur d\'insertion, l\'enregistrement existe déja </h2>';
		}
	if($bool==true){
		$req ="insert into eleve(matricule,prenomEleve,nomEleve,sexeEleve,dateNaissEleve,classe) values ('$matricule','$prenomEleve','$nomEleve','$sexeEleve','$dateNaissEleve','$classeEleve')";
		$res = $conn->query($req);
		echo '<h2>enregistrement réussi </h2>';
		?>
		<a href="afficheEleve.php?">Afficher la liste!</a>
		<?php
		}
	}
?>