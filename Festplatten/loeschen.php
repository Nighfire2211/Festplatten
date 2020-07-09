<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php
	$con = mysqli_connect("","root","");
	
	mysqli_select_db($con, "hardware");
	
	$id = $_POST["ID"];
	
	$sql = "SELECT * FROM Festplatten WHERE id = $id";
	$res = mysqli_query($con, $sql);
	$num = mysqli_num_rows($res);
	
	if ($num > 0)
	{
		//Lösche Kunde mit $id

		$sql = "DELETE FROM Festplatten WHERE id = $id";
					
		mysqli_query($con, $sql);
		
		// Alle Kunden ausgeben
		$res = mysqli_query($con, "SELECT * FROM Festplatten");
		
		
		$num = mysqli_num_rows($res);
			
		if($num > 0)
			echo "";
		else
			echo "keine Ergebnisse!<br>";
		
		echo "<table width='100%' border='1'>
        <tr><th>Id</th><th>Hersteller</th><th>Typ</th><th>Gb</th><th>Prod</th><th>Artnummer</th><th>Preis</th></tr>";	
		while ($dsatz = mysqli_fetch_assoc($res))
		{
			echo "<tr><td>" . $dsatz["id"] . "</td><td>"
			. $dsatz["hersteller"] . "</td><td>"
			. $dsatz["typ"] . "</td><td>"
			. $dsatz["gb"] . "</td><td>"
            . $dsatz["prod"] ."</td><td>"
            . $dsatz["artnummer"] ."</td><td>"
			. $dsatz["preis"] ."</td><tr>";
		}
		echo "</table>";
	}
		else
	{	
		//Keine entsprechende ID
		echo "keinen Datensatz mit entsprechender 'Id' gefunden! <br><br>";
		// Alle Kunden ausgeben
		$res = mysqli_query($con, "SELECT * FROM Festplatten");
		
		
		$num = mysqli_num_rows($res);
			
		if($num > 0)
			echo "";
		else
			echo "keine Ergebnisse!<br>";
		
		echo "<table width='100%' border='1'>
		<tr><th>Id</th><th>Hersteller</th><th>Typ</th><th>Gb</th><th>Prod</th><th>Artnummer</th><th>Preis</th></tr>";	
		while ($dsatz = mysqli_fetch_assoc($res))
		{
            echo "<tr><td>" . $dsatz["id"] . "</td><td>"
			. $dsatz["hersteller"] . "</td><td>"
			. $dsatz["typ"] . "</td><td>"
			. $dsatz["gb"] . "</td><td>"
            . $dsatz["prod"] ."</td><td>"
            . $dsatz["artnummer"] ."</td><td>"
			. $dsatz["preis"] ."</td><tr>";
		}
		echo "</table>";
	}
	
	mysqli_close($con);
?>
</body></html>
