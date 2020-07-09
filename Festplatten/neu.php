<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php
	
	$hersteller = $_POST["hersteller"];
	$typ = $_POST["typ"];
	$gb = $_POST["gb"];
	$prod = $_POST["prod"];
    $artnummer = $_POST["artnummer"];
    $preis = $_POST["preis"];
	

	$con = mysqli_connect("","root","");
	

	mysqli_select_db($con, "hardware");
	

	$sql = "INSERT INTO Festplatten (hersteller, typ, gb, prod, artnummer,preis) VALUES ('$hersteller' , '$typ' , '$gb' , '$prod' , '$artnummer','$preis')";
	
	mysqli_query($con, $sql);
	

	$res = mysqli_query($con, "SELECT * FROM Festplatten");
	

	$num = mysqli_num_rows($res);
	

	
	if($num > 0)
		echo "";
	else
		echo "keine Ergebnisse!<br>";
	
	echo "<table width='100%' border='1'>
    <tr>
    <th>ID</th>
    <th>Hersteller</th>
    <th>typ</th>
    <th>Gb</th>
    <th>Prod</th>
    <th>Artnummer</th>
    <th>Preis</th>
    </tr>";
		
	
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

	mysqli_close($con);
	?>
</body></html>
