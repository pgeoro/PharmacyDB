<html>
<head>
<title>Editare Producator</title>
</head>
<a href="index.php">
<button>Home</button>
</a>
<body>
<?php
if(isset($_POST['submit'])){
$ProducatoriNumeOLD=$_POST['PNOLD'];
$ProducatoriNume = $_POST['PNume'];
$ProducatoriTara = $_POST['PTara'];
$ProducatoriOras = $_POST['POras'];

require 'includes/connection.php';
$query = "UPDATE Producatori SET ProducatoriNume='$ProducatoriNume',ProducatoriTara='$ProducatoriTara',ProducatoriOras='$ProducatoriOras' WHERE ProducatoriNume='$ProducatoriNumeOLD'";
mysqli_query($dbc,$query);
echo 'S-a editat';
mysqli_close($dbc);
}
?>
</body>
</html>