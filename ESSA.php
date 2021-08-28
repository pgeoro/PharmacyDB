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
$SubstanteActiveNumeOLD=$_POST['SANOLD'];
$SubstanteActiveNume = $_POST['SANume'];
$SubstanteActiveEfect= $_POST['SAEfect'];

require 'includes/connection.php';
$query = "UPDATE SubstanteActive SET SubstanteActiveNume='$SubstanteActiveNume',SubstanteActiveEfect='$SubstanteActiveEfect' WHERE SubstanteActiveNume='$SubstanteActiveNumeOLD'";
mysqli_query($dbc,$query);
echo 'S-a editat';
mysqli_close($dbc);
}
?>
</body>
</html>