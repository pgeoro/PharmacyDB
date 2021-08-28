
<a href="index.php">
  <button>Home</button>
</a>
<?php


require 'includes/connection.php';

$query = "SELECT SUM(PretTotal) AS ValoareTotalaVanzari FROM (SELECT M.pret*MB.Cantitate AS PretTotal From Medicamente M 
JOIN medicamentebon MB ON M.idMedicamente=MB.Medicamente_idMedicamente
 JOIN bon ON bon.idBon=MB.Bon_idBon) t";

$response = @mysqli_query($dbc, $query);

if($response){
echo '<table align="left"
cellspacing="5" cellpadding="8">


<tr><td align="left"><b>Valoarea Totala a Vanzilor</b></td></tr>';

while($row=mysqli_fetch_array($response)){
    echo '<tr><td align="left>' .
    $row['ValoareTotalaVanzari'] . '</td><td align="left">' .
    $row['ValoareTotalaVanzari'] . '</td><td align="left">';

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