<html>
<head>
<title>Adaugare Substanta Activa</title>
</head>
<a href="index.php">
<button>Home</button>
</a>
<body>
<?php
if(isset($_POST['submit'])){
$SubstanteActiveNume = $_POST['SANume'];
$SubstanteActiveEfect = $_POST['SAefect'];

require 'includes/connection.php';
$query = "INSERT INTO SubstanteActive VALUES ('','$SubstanteActiveNume','$SubstanteActiveEfect')";
mysqli_query($dbc,$query);
echo 'S-a adaugat substanta activa';
mysqli_close($dbc);
}
?>
</body>
</html>



