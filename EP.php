<html>
<head>
<title>Editare Producator</title>
</head>
<body>
<a href="index.php">
<button>Home</button>
</a>
<?php
//Script pentru editarea producatorilor. Am preluat numele din scriptul UpdateProducator.php, care functioneaza pe acelasi principiu ca scriptul AdaugareProducator.php, explicat anterior
require 'includes/connection.php';
$ProducatoriNumeOLD = $_POST['PNumeOLD']; 

    $query= "Select * FROM Producatori WHERE ProducatoriNume='$ProducatoriNumeOLD'"; //se selecteaza producatorul cu numele introdus in scriptul anterior pentru a fi editat
//nu afisam producatorul, deoarece query-ul este folosit pentru a extrage datele
    $response = @mysqli_query($dbc, $query);


if($response){

 



while($row=mysqli_fetch_array($response)){
    $PN=$row['ProducatoriNume']; //se introduc datele in variabile
    $PT=$row['ProducatoriTara'];
    $PO=$row['ProducatoriOras'];

}

}

else {
echo "Couldn't issue database query<br />";
echo mysqli_error($dbc);

}




mysqli_close($dbc);

?>
<form action="EPP.php" method="post"> 
 <!--Form pentru a introduce noile date. De asemenea punem datele vechi,needitate in text-boxuri pentru a putea tine cont de ele. De aceea am rulat un query anterior-->
<b>Editati Producatorul 
<input type="text" name="PNOLD" value="<?php echo $ProducatoriNumeOLD?>" readonly></b> 

<p>Nume Producator:
<input type="text" name="PNume" size="45" value=<?php echo $PN ?> /> <!--Textbox pentru introducea datelor. De asemea valorile vechi ale campului care se editeaza sunt afisate.-->
</p>

<p>Tara:
<input type="text" name="PTara" size="45" value=<?php echo $PT ?> />
</p>

<p>Oras:
<input type="text" name="POras" size="45" value=<?php echo $PO ?> />
</p>

 <p>
     <input type="submit" name="submit" value="send"/>


</p>

</form>


</form>
</body>
</html>
