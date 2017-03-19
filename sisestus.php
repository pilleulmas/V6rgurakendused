<?php 
$nameErr = $sisuErr = "";
$name = $sisu = "";


	if (empty($_POST["nimi"])){
		$nameErr = "kasutajanimi puudub!";
		$sisu = ($_POST["tagasiside"]);
		include ('main.php');
		die();
	} else {
		$name= ($_POST["nimi"]);
	}

	if (empty($_POST["tagasiside"])){
		$sisuErr = "Sisu puudu!";
		include ('main.php');
		die();
	} else {
		$sisu = ($_POST["tagasiside"]);
	}

	
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
	
	$sql = "INSERT INTO pulmas_Tagasiside_vorm (Nimi, tagasiside)
	VALUES ('" . $_POST["nimi"] . "', '" . $_POST["tagasiside"] . "')";
	
	mysqli_query($l, $sql);
    mysqli_close($l);
	
	header("Location: main.php");
	die();
?>