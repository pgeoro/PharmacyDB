
<a href="index.php">
  <button>Home</button>
</a>
<?php


require 'includes/connection.php';

$query = "SELECT M.MedicamenteNume ,M.MedicamenteTip ,M.pret, MB.Cantitate,bon.idbon, bon.BonData From Medicamente M 
JOIN medicamentebon MB ON M.idMedicamente=MB.Medicamente_idMedicamente
 Join bon ON bon.idBon=MB.Bon_idBon
 ORDER BY bon.BonData ASC";

$response = @mysqli_query($dbc, $query);

if($response){
echo '<table align="left"
cellspacing="5" cellpadding="8">


<tr><td align="left"><b>Nume Medicament</b></td>
<td align="left"><b>Tip</b></td>
<td align="left"><b>Pret</b></td>
<td align="left"><b>Cantitate</b></td>
<td align="left"><b>ID Bon</b></td>
<td align="left"><b>Data</b></td></tr>';

while($row=mysqli_fetch_array($response)){
    echo '<tr><td align="left>' .
    $row['MedicamenteNume'] . '</td><td align="left">' .
    $row['MedicamenteNume'] . '</td><td align="left">' .
    $row['MedicamenteTip'] . '</td><td align="left">' .
    $row['pret'] . '</td><td align="left">' .
    $row['Cantitate'] . '</td><td align="left">' .
    $row['idbon'] . '</td><td align="left">' .
    $row['BonData'] . '</td><td align="left">';

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