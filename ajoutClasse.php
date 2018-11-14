<?php
	REQUIRE_ONCE("connexion.php");
	if(isset($_POST['nomClasse'])){//s'il a cliquer sur ajouter la 2eme fois
		$nomClasse=$_POST['nomClasse'];
		$req ="select count(*) as nb from classe where nomClasse='$nomClasse'";
		$res = $conn->query($req);
		$compte = mysqli_fetch_array($res);
		$bool=true;
		if($compte['nb']>0){
			$bool=false;
			echo '<h2>Erreur d\'insertion, l\'enregistrement existe déja </h2>';
		}
	if($bool==true){
		$req ="insert into classe(nomClasse) values ('$nomClasse')";
		$res = $conn->query($req);
		echo '<h2>enregistrement réussi </h2>';
		}
	}
?>