<html>
<head>
<title>Stergere Producator</title>
</head>
<body>

<form action="SP.php" method="post">

 <?php include("aP.php"); ?>

<b>Stergeti producatorii cu numele sau tara sau orasul</b>
 
<p>Nume Producator:
<input type="text" name="PNume" size="45" value="" />
</p>

<p>Tara:
<input type="text" name="PTara" size="45" value="" />
</p>

<p>Oras:
<input type="text" name="POras" size="45" value="" />
</p>
 
 <p>
     <input type="submit" name="submit" value="send"/>
</p>

</form>
</body>
</html>
