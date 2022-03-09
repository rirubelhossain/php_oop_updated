<?php
include 'inc/header.php';

?>

<?php

$conn = new mysqli("localhost", "root", "","userdata");


if($conn ->connect_error){
	die("Connection faild".$conn->connect_error);
}else{
	//echo "Connection successfully!";
}



//$sql ="select * from tbl_user"; Normally sql 

//$sql = "update tbl_user set skill = 'java,php' where id='1'"; update sql
//Delete sql

//$sql = "Delete from tbl_user where id='5'" ;

$sql = "select name , skill,email from tbl_user order by id";

//$result = $conn->query($sql) ;

$stmt = $conn->prepare($sql) ;
$stmt->execute() ;
$stmt->bind_result($nam , $rubel,$email) ;
while($stmt->fetch()){
	echo "The user name = ".$nam." and skills is = ".$rubel." and email is = ".$email."<br>";
}


/*
while($data = $result->fetch_object()){
	echo "<pre>";
	echo $data->skill;
	echo "<pre>";
	
}
*/

$conn->close();

?>


<?php
include 'inc/footer.php';

?>