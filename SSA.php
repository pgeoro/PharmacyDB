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
$SubstanteActiveNume = $_POST['SANume'];
$SubstanteActiveEfect = $_POST['SAEfect'];


require 'includes/connection.php';
$query = "DELETE FROM substanteactive WHERE (SubstanteActiveNume='$SubstanteActiveNume' OR SubstanteActiveEfect='$SubstanteActiveEfect')  ";
mysqli_query($dbc,$query);
echo 'S-au sters substantele active cu numelele=',$SubstanteActiveNume ,' sau cu efectul=',$SubstanteActiveEfect ;
mysqli_close($dbc);
}
?>
</body>
</html>



