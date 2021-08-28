
<a href="index.php">
  <button>Home</button>
</a>
<?php


require 'includes/connection.php';

$query = "SELECT t.idbon, SUM(PretTotal) AS ValoareTotalaVanzari , t.bonData FROM (SELECT bon.idbon,bon.BonData, M.pret*MB.Cantitate AS PretTotal From Medicamente M 
JOIN medicamentebon MB ON M.idMedicamente=MB.Medicamente_idMedicamente
 JOIN bon ON bon.idBon=MB.Bon_idBon) t GROUP BY t.bonData ASC";

$response = @mysqli_query($dbc, $query);

if($response){
echo '<table align="left"
cellspacing="5" cellpadding="8">


<tr><td align="left"><b>ID Bon</b></td>
<td align="left"><b>Valoare Totala</b></td>
<td align="left"><b>Data</b></td></tr>';

while($row=mysqli_fetch_array($response)){
    echo '<tr><td align="left>' .
    $row['idbon'] . '</td><td align="left">' .
    $row['idbon'] . '</td><td align="left">' .
    $row['ValoareTotalaVanzari'] . '</td><td align="left">' .
    $row['bonData'] . '</td><td align="left">';

    echo'</tr>';
}
    echo'</table>';

}

else {
echo "Couldn't issue database query<br />";
echo mysqli_error($dbc);

}
mysqli_close($dbc);
?>