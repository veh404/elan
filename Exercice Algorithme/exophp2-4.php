
<?php 

$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

echo "<table border='1'>";
echo "<td>Pays";
echo "<td>Capitales";
echo "<td>Lien wiki";
asort($capitales);
foreach($capitales as $pays=>$capitales1) {
    echo "<tr>";
    echo mb_strtoupper("<td>".$pays."</td>");
    echo  "<td>".$capitales1."</td>";
    echo  '<td><a href="https://fr.wikipedia.org/wiki/'.$capitales1.'">Lien</a>';
}
echo "</table>";
?>