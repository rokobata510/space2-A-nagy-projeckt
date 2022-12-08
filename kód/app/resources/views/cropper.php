<?php
//sql connection adatok
$servername = "localhost";
$username = "root";
$password = "";
$database = "imgtest";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$url_arr = [];
$sql = "SELECT url FROM image";
$result = $conn->query($sql);
//ha ad vissza valamit a $sql lekérdezés, akkor $resultimg lesz az
//tesztelés idejére csak egy visszaadott képet kezel
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		array_push($url_arr, $row["url"]);
	}
} else {
	echo "0 results";
}
$conn->close();

//random choice url_arr-bol
$i = rand(0, sizeof($url_arr)-1);
$resultimg = $url_arr[$i];

//$resultimg egy tárolt url string
//kivesszük az értékét
//képet csinálunk a stringből
$im = imagecreatefromstring(file_get_contents($resultimg));
//kivágott kép mérete
$size= 50;
//$im2 a kivágott kép, x,y kooridnátákat random választjuk
//$size eltolás, hogy ne válasszon a legszéléről, legyen meg az 50px*50px
$im2 = imagecrop($im, ['x' => rand($size,imagesx($im)-$size), 'y' => rand($size,imagesy($im)-$size), 'width' => $size, 'height' => $size]);
//ha összejött, akkor egy képként kezeljük a fájlt
if ($im2 !== FALSE) {
	header("Content-type: image/png");
	imagepng($im2);
	imagedestroy($im2);
}
imagedestroy($im);
?>
