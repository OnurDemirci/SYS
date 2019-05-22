<?php
$conn=mysqli_connect("localhost","root","","suys");
if($conn){
	echo "";
	mysqli_query($conn,"SET NAMES UTF8");
	setlocale(LC_TIME,"Turkish");
}
else {
	die("Bağlantı sağlanamadı");
}

?>