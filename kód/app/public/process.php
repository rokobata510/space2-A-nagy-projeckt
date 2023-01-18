<?php
    //sql connection adatok
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "laravel";

    $conn = new mysqli($servername, $username, $password,$database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>

<?php
if(isset($_POST)){

	$link 		= $_POST['link'];
	$solution 		= $_POST['solution'];

		$sql = "INSERT INTO images (link, solution) VALUES(?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$link, $solution]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
?>
