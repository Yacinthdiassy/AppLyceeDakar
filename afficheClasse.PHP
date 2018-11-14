<?php
REQUIRE_ONCE("connexion.php"); 
$req ="select idClasse,nomClasse
from classe";
$data = $conn->query($req);
?>
<center>
<h2>Liste des classes </h2><br/>
<table id="">
<thead>
<th class="">Nom classe</th>
</thead>
<tfoot>
<tr>
<td class="">&nbsp;</td>
</tr>
</tfoot>
 <tbody>
<?php
while($a=mysqli_fetch_array($data)){
?>
<tr> 
?><td><a href="modif_classe.php?modif_classe=<?php echo $a['idClasse']; ?>">modifier</a></td><td><a href="modif_classe.php?supp_classe=<?php echo $a['idClasse']; ?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette classe?'));">supprimer</a></td> <?php }
echo '<td>'.$a['nomClasse'].'</td></tr>';
?>
<tbody>
</table></center> <?php

?>
</div>
