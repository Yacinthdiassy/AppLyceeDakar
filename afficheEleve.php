<?php
REQUIRE_ONCE("connexion.php"); 
$req ="select idEleve,matricule,prenomEleve,nomEleve, SexeEleve, dateNaissEleve,classe
from eleve";
$data = $conn->query($req);
?>
<center>
<h2>Liste des élèves </h2><br/>
<table id="">
<thead>
<th class="" colspan="2"></th>
<th class="thlist">Matricule</th>
<th class="thlist">Prénom</th>
<th class="thlist">Nom élève</th>
<th class="thlist">Sexe</th>
<th class="thlist">Date Naiss</th>
<th class="thlist">Classe</th>
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
<tr><?php
echo '<td><a href="modif_eleve.php?modif_el='.$a['idEleve'].'">modifier</a></td><td><a href="modif_eleve.php?supp_el='.$a['idEleve'].'" onclick="return(confirm(\'Etes-vous sûr de vouloir supprimer cette entrée?\'));">supprimer</a></td>';
echo '<td>'.$a['matricule'].'</td><td>'.$a['prenomEleve'].'</td><td>'.$a['nomEleve'].'</td><td>'.$a['SexeEleve'].'</td><td>'.$a['dateNaissEleve'].'</td> <td>'.$a['classe'].'</td></tr>';
}
?>
<tbody>
</table>
<a href="ajoutEleve.html?">Revenir à l'ajout !</a>
</center> <?php

?>
</div>
