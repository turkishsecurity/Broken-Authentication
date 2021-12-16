<!DOCTYPE html>
<html>
<head>
	<title>Broken Authentication</title>
</head>
<body>
<center>
	<h1>Broken Authentication</h1>
<form method="POST">
  <div>
  </div>
  <div>
    <button type="submit">Login</button>
  </div>
  <input type="hidden" name="user" value="john">
</form>
<?php
error_reporting(0);
$u = htmlspecialchars($_POST['user']);
$hb = "<br>";
$h1b = "<h1>";
$h1s = "</h1>";
if($u == "") {
	echo "";
} else {
	echo $hb.$h1b."<h1>Logined User: </h1>".$u.$h1s.$hb;
}

if($u == "admin") {
	echo "------------------ <h1> ADMINISTRATION PANEL </h1> -----------<br>";
	echo "<button>Site Settings</button><br>";
    echo "<button>Gallery</button><br>";
    echo "<button>Blog</button><br>";
}
?>
</center>
</body>
</html>
