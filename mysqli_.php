<?php
include 'inc/header.php';

?>

<?php

$conn = new mysqli("localhost", "root", "","userdata");


if($conn ->connect_error){
	die("Connection faild".$conn->connect_error);
}else{
	echo "Connection successfully!";
}

$conn->close();
?>


<?php
include 'inc/footer.php';

?>