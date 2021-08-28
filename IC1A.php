<a href="index.php">
  <button>Home</button>
</a>
<?php

if(isset($_POST['submit'])){
$Efect = $_POST['EFF'];

require 'includes/connection.php';

$query = "SELECT M.MedicamenteNume ,M.MedicamenteTip ,M.DataExpirare, M.pret ,S.SubstanteActiveEfect  FROM Medicamente M 
JOIN substanteactive S ON M.SubstanteActive_idSubstanteactive=S.idSubstanteactive
 WHERE S.SubstanteActiveEfect='$Efect'";

$response = @mysqli_query($dbc, $query);

if($response){
echo '<table align="left"
cellspacing="5" cellpadding="8">


<tr><td align="left"><b>Nume Medicament</b></td>
<td align="left"><b>Tip</b></td>
<td align="left"><b>Expira</b></td>
<td align="left"><b>Pret</b></td>
<td align="left"><b>Efect</b></td></tr>';

while($row=mysqli_fetch_array($response)){
    echo '<tr><td align="left>' .
    $row['MedicamenteNume'] . '</td><td align="left">' .
    $row['MedicamenteNume'] . '</td><td align="left">' .
    $row['MedicamenteTip'] . '</td><td align="left">' .
    $row['DataExpirare'] . '</td><td align="left">' .
    $row['pret'] . '</td><td align="left">' .
    $row['SubstanteActiveEfect'] . '</td><td align="left">';

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