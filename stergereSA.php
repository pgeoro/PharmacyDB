<html>
<head>
<title>Stergere Substanta Activa</title>
</head>
<body>

<form action="SSA.php" method="post">

 <?php include("aSA.php"); ?>

<b>Stergeti producatorii cu numele efectul</b>
 
<p>Nume:
<input type="text" name="SANume" size="45" value="" />
</p>

<p>Efect:
<input type="text" name="SAEfect" size="45" value="" />
</p>

 <p>
     <input type="submit" name="submit" value="send"/>
</p>

</form>
</body>
</html>
