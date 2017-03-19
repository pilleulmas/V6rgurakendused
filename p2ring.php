<?php 
	
	
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    
	$sql1 = "SELECT Nimi, tagasiside FROM pulmas_Tagasiside_vorm";
	$result = $l->query($sql1);

	if ($result->num_rows > 0) {
		 // output data of each row
		 while($row = $result->fetch_assoc()) {
			 echo "<br> ". $row["Nimi"]. " kirjutas: " . $row["tagasiside"] . "<br>";
		 }
	} else {
		 echo "0 results";
	}
	//mysqli_query($l, $sql1);
	
    mysqli_close($l);
	?>