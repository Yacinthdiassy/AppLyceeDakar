<?php
// on se connecte à MySQL et on sélectionne la base
$conn = mysqli_connect('localhost', 'root', '', 'mabaseld') or die(mysqli_connect_error());
$req="select distinct nomClasse from classe"; 
 $retour = $conn->query($req);
?>
