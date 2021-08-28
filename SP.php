<html>
<head>
<title>Stergere</title>
<a href="index.php">
<button>Home</button>
</a>
</head>
<body>
<?php
if(isset($_POST['submit'])){
$ProducatoriNume = $_POST['PNume'];
$ProducatoriTara = $_POST['PTara'];
$ProducatoriOras = $_POST['POras'];


require 'includes/connection.php';
$query = "DELETE FROM Producatori WHERE (ProducatoriNume='$ProducatoriNume' OR ProducatoriTara='$ProducatoriTara'  OR ProducatoriOras='$ProducatoriOras')  ";
mysqli_query($dbc,$query);
echo 'S-au sters producatorii cu numelele=',$ProducatoriNume ,' sau cu tara=',$ProducatoriTara , 'sau cu orasul=',$ProducatoriOras;
mysqli_close($dbc);
}
?>
</body>
</html>



