<html>
<head>
<title>Adaugare Producator</title>
</head>
<a href="index.php">
<button>Home</button>
</a>
<body>
<?php

if(isset($_POST['submit'])){  //Daca este apsat butonul send din scriptul anterior
$ProducatoriNume = $_POST['PNume']; //Se iau valorile din scriptul anterior cu POST si sunt puse in variabile
$ProducatoriTara = $_POST['PTara'];
$ProducatoriOras = $_POST['POras'];

require 'includes/connection.php'; //trebuie sa ne conectam la baza de date pentru a lucra cu ea
$query = "INSERT INTO Producatori VALUES ('','$ProducatoriNume','$ProducatoriTara','$ProducatoriOras')"; // query pentru baza de date, adauca nume,tara,si oras in tabelul Producatori
mysqli_query($dbc,$query); //se executa query-ul
echo 'S-a adaugat producator';
mysqli_close($dbc); //se inchide baza de date
}
?>
</body>
</html>



