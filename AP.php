<a href="index.php">
  <button>Home</button>
</a>
<?php

//script pentru afisarea Producatorilor
require 'includes/connection.php'; //avem nevoie de conexiune la baza de date

    $query= "Select * FROM Producatori"; //query

    $response = @mysqli_query($dbc, $query); //se executa query-ul si se pun valori in response


if($response){ //daca exista raspuns

 
// se creaza un mic tabel pentru afisarea rezultatelor
echo '<table align="left" 
cellspacing="5" cellpadding="8">

<tr>
<td align="left"><b>Nume Producatori</td>
<td align="left"><b>Tara Producatori</b></td>
<td align="left"><b>Oras Producatori</td></tr>';

while($row=mysqli_fetch_array($response)){ //cat timp mai sunt randuri in matricea cu raspunsul query-ului
    //afisam valorile returnate
    echo '<tr><td align="left>' .
    $row['idProducatori'] . '</td><td align="left">' . 
    $row['ProducatoriNume'] . '</td><td align="left">' .
    $row['ProducatoriTara'] . '</td><td align="left">' .
    $row['ProducatoriOras'] . '</td><td align="left">';

    echo'</tr>';
}
    echo'</table>';

}

else { //daca nu se poate efectua query-ului
echo "Couldn't issue database query<br />";
echo mysqli_error($dbc);

}
mysqli_close($dbc); // se inchide baza de date

?>