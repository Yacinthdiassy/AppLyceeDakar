<?php
REQUIRE_ONCE("connexion.php");
if(isset($_GET['modif_el'])){//modif_el qu'on a recupérer de l'affichage (modifier)
$id=$_GET['modif_el'];
$req ="select * from eleve where idEleve='$id'";
$res = $conn->query($req);
$ligne = mysqli_fetch_array($res);
$matricule=stripslashes($ligne['matricule']);
$nomEleve=stripslashes($ligne['nomEleve']);
$prenomEleve=stripslashes($ligne['prenomEleve']);
$sexeEleve=stripslashes($ligne['sexeEleve']);
$dateNaissEleve=stripslashes($ligne['dateNaissEleve']);
$classe=stripslashes($ligne['classe']);
?>
<div class="corp">
<br/><br/><br/>
<form action="modif_eleve.php" method="POST" class="formulaire">
<center><h2>Veuillez saisir les nouveaux informations de cet élève !</h2><br/>
   
 <LEGEND align=top>Modifier un étudiant<LEGEND>
 <table >
    <tbody>
	<tr>
        <td>Matricule</td>
        <td><input type="text" name="matricule" value="<?php echo $matricule; ?>"></td>
      </tr>
     <tr>
        <td>Prénom</td>
        <td><input type="text" name="prenom" value="<?php echo $prenomEleve; ?>"></td>
      </tr>
	  <tr>
        <td>Nom</td>
        <td><input type="text" name="nom" value="<?php echo $nomEleve; ?>"></td>
      </tr>
	  <tr>
        <td>Sexe</td>
        <td><select name="sexe"><option value="Masculin">Masculin</option><option value="Féminin">Féminin</option></select></td>
      </tr>
	  <tr>
        <td>Date de naissance</td>
        <td><input type="date" name="date" value="<?php echo $dateNaissEleve; ?>"></td>
      </tr>
	  <tr>
        <td>Classe</td>
        <td><input type="text" name="classe" value="<?php echo $classe; ?>"></td>
      </tr>
	  
    <tr>
        <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
        <td><input type="submit"></td>
      </tr>
    </tbody>
  </table>	  

</form><a href="afficheEleve.php?">Revenir à la page précédente !</a>
</div>
<?php
}
if(isset($_POST['matricule'])){
	if($_POST['matricule']!=""){
		$id=$_POST['id'];
		$sexeEleve=($_POST['sexe']);
		$dateNaissEleve=($_POST['date']);
		$prenomEleve=($_POST['prenom']);
		$nomEleve=($_POST['nom']);
    $matricule=($_POST['matricule']);
		$classe=($_POST['classe']);
		$req ="update eleve set sexeEleve='$sexeEleve', dateNaissEleve='$dateNaissEleve', prenomEleve='$prenomEleve', nomEleve='$nomEleve', matricule='$matricule', classe='$classe' where idEleve='$id'";
		$res = $conn->query($req);
		?> <SCRIPT LANGUAGE="Javascript">	alert("Modifié avec succés!"); </SCRIPT> 
		<?php
		
	}
	else{
	?> <SCRIPT LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champss"); </SCRIPT> <?php
	}
	echo '<div class="corp"><br/><br/><a href="modif_eleve.php?modif_el='.$id.'">Revenir à la page precedente !</a></div>';
}
if(isset($_GET['supp_el'])){
$id=$_GET['supp_el'];
$req ="delete from eleve where idEleve='$id'";
$res = $conn->query($req);
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
echo '<br/><br/><a href="afficheEleve.php?">Revenir à la page principale !</a>';
}
?>
</center>
</body>
</html>