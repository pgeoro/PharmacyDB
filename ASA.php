<a href="index.php">
  <button>Home</button>
</a>
<?php


require 'includes/connection.php';

    $query= "Select * FROM SubstanteActive";

    $response = @mysqli_query($dbc, $query);


if($response){

 

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr>
<td align="left"><b>Nume Substante Active</td>
<td align="left"><b>Efect Substante Active</b></td></tr>';

while($row=mysqli_fetch_array($response)){
    echo '<tr><td align="left>' .
    $row['idSubstanteActive'] . '</td><td align="left">' .
    $row['SubstanteActiveNume'] . '</td><td align="left">' .
    $row['SubstanteActiveEfect'] . '</td><td align="left">' ;

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