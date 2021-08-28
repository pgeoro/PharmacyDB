<!DOCTYPE html>
<html>
<head>
<a href="index.php">  <!--buton home-->
  <button>Home</button>
</a>

<br>
<a href="AP.php">
  <button>Afisare Producatori</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <!--butoane pentru interogari-->

<a href="adaugareproducator.php">
  <button>Adaugare Producatori</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="IC1.php">
  <button>IC1</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="IC2.php">
  <button>IC2</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="IC3.php">
  <button>IC3</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="IC4.php">
  <button>IC4</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="IC5.php">
  <button>IC5</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="IC6.php">
  <button>IC6</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="IC7.php">
  <button>IC7</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="IC8.php">
  <button>IC8</button>
</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<p><br></p>

	<form action="SelAct-Tab.php" method="post"> <!--listbox pentru a se putea face operatii pe toate tabelele, fara a se ocupa prea mult din ecran-->
	Tip Tabel<select name="Tabel"><br>  <!--valoarile selectate sunt pastrate in variabilelele Tabel, Actiune si sunt predate unui script PHP-->
 			<option value="producatori">Producatori</option>
  			<option value="substanteactive">Substante Active</option>
  			<option value="medicamente">Medicamente</option>
  			<option value="angajati">Angajati</option>
  			<option value="client">Clienti</option>
  			<option value="bon">Bonuri</option>
		</select><br>
    	Tip Actiune<select name="Actiune"><br>
 			<option value="Inserare">Inserare</option>
  			<option value="Stergere">Stergere</option>
  			<option value="Update">Update</option>
        <option value="Afisare">Afisare</option>
		</select><br>
    <input type="Submit">
  </form>

<br><br><br>

<title>Farmacie</title>



</head>
</html>

