
<a href="index.php">
  <button>Home</button>
</a>
<?php


require 'includes/connection.php';

$query = "SELECT Angajati.idAngajati,Angajati.Angajatinume,Angajati.AngajatiPrenume, t.idbon, SUM(PretTotal) AS ValoareTotalaVanzari , t.bonData FROM (SELECT bon.Angajati_idAngajati, bon.idbon,bon.BonData, M.pret*MB.Cantitate AS PretTotal From Medicamente M 
JOIN medicamentebon MB ON M.idMedicamente=MB.Medicamente_idMedicamente
 JOIN bon ON bon.idBon=MB.Bon_idBon) t 
 JOIN Angajati ON Angajati.idAngajati=t.angajati_idangajati
 GROUP BY t.idbon ASC";

$response = @mysqli_query($dbc, $query);

if($response){
echo '<table align="left"
cellspacing="5" cellpadding="8">


<tr><td align="left"><b>ID Angajat</b></td>
<td align="left"><b>Nume</b></td>
<td align="left"><b>Prenume</b></td>
<td align="left"><b>ID Bon</b></td>
<td align="left"><b>Valoare</b></td>
<td align="left"><b>Data</b></td></tr>';

while($row=mysqli_fetch_array($response)){
    echo '<tr><td align="left>' .
    $row['idAngajati'] . '</td><td align="left">' .
    $row['idAngajati'] . '</td><td align="left">' .
    $row['Angajatinume'] . '</td><td align="left">' .
    $row['AngajatiPrenume'] . '</td><td align="left">' .
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