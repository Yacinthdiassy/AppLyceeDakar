<?php

if(isset($_GET['modif_classe'])){
$id=$_GET['modif_classe'];
$req ="select numClasse,nomClasse from classe,prof,surveillant where and numClasse='$id'";
$res = $conn->query($req);
$ligne = mysqli_fetch_array($res);
?>
<div class="corp">
<br/><br/><br/>
<form action="modif_classe.php" method="POST" class="formulaire">
<center><h2>Veuillez saisir les nouveaux informations de cette classe !</h2><br/>
     <tr>
        <td>Nom classe</td>
        <td><input type="text" name="nom" value="<?php echo $nomClasse; ?>"></td>
      </tr>
<br/><br/><a href="afficheClasse.php">Revenir à la page précédente !</a>
<?php
}
if(isset($_POST['nomClasse'])){
	if($_POST['nomClasse']!=""){
		$id=$_POST['id'];
		$nomClasse=($_POST['nomClasse']);
		$req="update classe set nomClasse='$nomClasse' where idClasse='$id'";
		$res = $conn->query($req);
		?> <SCRIPT LANGUAGE="Javascript">	alert("Modifié avec succés!"); </SCRIPT> <?php
		echo '<br/><br/><a href="modif_classe.php?modif_classe='.$id.'">Revenir à la page precedente !</a>';
	}
	else{
		echo '<h1>erreur! Vous devez remplire tous les champss<h1>';
		echo '<br/><br/><a href="modif_classe.php?modif_classe='.$id.'">Revenir à la page  precedente  !</a>';
	}
}
if(isset($_GET['supp_classe'])){
$id=$_GET['supp_classe'];
$req="delete from classe where idClasse='$id'";
$res = $conn->query($req);
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
echo '<br/><br/><a href="affiche_classe.php">Revenir à la page  precedente !</a>';
}
?>
</center>
</div>
</body>
</html>