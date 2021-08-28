<html>
<head>
<title>Adaugare Producator</title>
</head>
<a href="index.php">
  <button>Home</button>
</a>
<body>  <!--Scriptul preia valori de la tastatura, si le transmite urmatorului script, addP.php, care foloseste valorile pentru a adauga Producatori in baza de date-->
<form action="addP.php" method="post"> 
 
<b>Adaugati un nou producator</b>
 
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
