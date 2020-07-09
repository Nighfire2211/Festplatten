<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php

	$con = mysqli_connect("","root","");
	

	mysqli_select_db($con, "hardware");
	
	/* SQL-Abfrage ausführen */
	$res = mysqli_query($con, "SELECT * FROM Festplatten");
	

	$num = mysqli_num_rows($res);
	

	
	if($num > 0)
		echo "";
	else
		echo "keine Ergebnisse!<br>";
	
	echo "<table width='100%' border='1'>
	<tr><th>ID</th><th>Hersteller</th><th>Typ</th><th>GB</th><th>Prod</th><th>Artnummer</th><th>Preis</th></tr>";

	while ($dsatz = mysqli_fetch_assoc($res))
	{
		echo "<tr><td>" . $dsatz["id"] . "</td><td>"
		. $dsatz["hersteller"] . "</td><td>"
		. $dsatz["typ"] . "</td><td>"
		. $dsatz["gb"] . "</td><td>"
		. $dsatz["prod"] ."</td><td>"
        . $dsatz["artnummer"] ."</td><td>"
        .$dsatz["preis"]."</td><tr>";
	}
	echo "</table>";
	

	mysqli_close($con);
	?>
</body></html>