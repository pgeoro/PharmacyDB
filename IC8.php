
<a href="index.php">
  <button>Home</button>
</a>
<?php


require 'includes/connection.php';

$query = "SELECT A.idAngajati , A.AngajatiNume, A.AngajatiPrenume, B.ValoareTotalaBon FROM Angajati A
JOIN ( SELECT t.idbon,t.Angajati_idAngajati, SUM(PretTotal) AS ValoareTotalaBon FROM 
(SELECT bon.Angajati_idAngajati,bon.idbon,bon.BonData, M.pret*MB.Cantitate AS PretTotal From Medicamente M 
JOIN medicamentebon MB ON M.idMedicamente=MB.Medicamente_idMedicamente
 JOIN bon ON bon.idBon=MB.Bon_idBon
 JOIN angajati ON angajati.idAngajati=bon.Angajati_idAngajati)
 t group by t.angajati_idAngajati) B ON A.idangajati=B.Angajati_idAngajati
 ORDER BY B.ValoareTotalaBon DESC";

$response = @mysqli_query($dbc, $query);

if($response){
echo '<table align="left"
cellspacing="5" cellpadding="8">


<tr><td align="left"><b>ID Angajat</b></td>
<td align="left"><b>Nume</b></td>
<td align="left"><b>Prenume</b></td>
<td align="left"><b>Valoare Totala Vanzari</b></td></tr>';

while($row=mysqli_fetch_array($response)){
    echo '<tr><td align="left>' .
    $row['idAngajati'] . '</td><td align="left">' .
    $row['idAngajati'] . '</td><td align="left">' .
    $row['AngajatiNume'] . '</td><td align="left">' .
    $row['AngajatiPrenume'] . '</td><td align="left">' .
    $row['ValoareTotalaBon'] . '</td><td align="left">';

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