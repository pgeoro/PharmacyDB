<html>
<head>
<title>Editare Producator</title>
</head>
<body>
<a href="index.php">
<button>Home</button>
</a>
<?php
require 'includes/connection.php';
$SANOLD = $_POST['SANumeOLD'];

    $query= "Select * FROM Substanteactive WHERE SubstanteactiveNume='$SANOLD'";

    $response = @mysqli_query($dbc, $query);


if($response){

 



while($row=mysqli_fetch_array($response)){
    $SAN=$row['SubstanteActiveNume'];
    $SAE=$row['SubstanteActiveEfect'];

}

}

else {
echo "Couldn't issue database query<br />";
echo mysqli_error($dbc);

}




mysqli_close($dbc);

?>
<form action="ESSA.php" method="post">
 
<b>Editati Substanta activa 
<input type="text" name="SANOLD" value="<?php echo $SANOLD?>" readonly></b>

<p>Nume Substanta activa:
<input type="text" name="SANume" size="45" value=<?php echo $SAN ?> />
</p>

<p>Efect:
<input type="text" name="SAEfect" size="45" value=<?php echo $SAE ?> />
</p>

 <p>
     <input type="submit" name="submit" value="send"/>


</p>

</form>


</form>
</body>
</html>
