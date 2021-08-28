<a href="index.php">
  <button>Home</button>
</a>
<?php

if(isset($_POST['submit'])){
$PMIN = $_POST['PT'];

require 'includes/connection.php';

$query = "SELECT M.MedicamenteNume ,M.MedicamenteTip,M.pret, MB.Cantitate ,M.pret*MB.Cantitate AS PretTotal ,bon.idBon From Medicamente M 
JOIN medicamentebon MB ON M.idMedicamente=MB.Medicamente_idMedicamente
 JOIN bon ON bon.idBon=MB.Bon_idBon
WHERE M.pret*MB.Cantitate>=$PMIN ORDER BY PretTotal DESC";

$response = @mysqli_query($dbc, $query);

if($response){
echo '<table align="left"
cellspacing="5" cellpadding="8">


<tr><td align="left"><b>Nume Medicament</b></td>
<td align="left"><b>Tip</b></td>
<td align="left"><b>Pret</b></td>
<td align="left"><b>Cantitate</b></td>
<td align="left"><b>Pret Total</b></td>
<td align="left"><b>ID Bon</b></td></tr>';

while($row=mysqli_fetch_array($response)){
    echo '<tr><td align="left>' .
    $row['MedicamenteNume'] . '</td><td align="left">' .
    $row['MedicamenteNume'] . '</td><td align="left">' .
    $row['MedicamenteTip'] . '</td><td align="left">' .
    $row['pret'] . '</td><td align="left">' .
    $row['Cantitate'] . '</td><td align="left">' .
    $row['PretTotal'] . '</td><td align="left">'.
    $row['idBon'] . '</td><td align="left">';

    echo'</tr>';
}
    echo'</table>';

}

else {
echo "Couldn't issue database query<br />";
echo mysqli_error($dbc);

}
mysqli_close($dbc);
}
?>