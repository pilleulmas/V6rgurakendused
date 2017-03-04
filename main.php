<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" />
	<title>Praktikum 2</title>
    <link href='style.css' rel='stylesheet'>
  </head>
  <body>

    <div class="menu">

      <div class="icon-close">
        <img src="Pildid/nupp.png" alt="hops">
      </div>

      <ul>
        <li><a href="personal_data.html">Personal data</a></li>
        <li><a href="education.html">Education</a></li>
        <li><a href="training.html">Refresher training</a></li>
        <li><a href="work_experience.html">Work experience</a></li>
		<li><a href="skills.html">Skills</a></li>
		<li><a href="main.php">Home</a></li>
      </ul>
    </div>

    <div class="jumbotron">
	
      <div class="icon-menu">
        Menu
      </div>
    
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="app.js"></script>
	<?php echo phpversion() ?>
	<?php 
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
    
    mysqli_close($l);
	?>

<p>
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 </a>
</p>
	</div>
  </body>
</html>
