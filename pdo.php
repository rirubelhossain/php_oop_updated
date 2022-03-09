<?php
include 'inc/header.php';
?>
<?php
$dsn = "mysql:dbname=userdata; host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn , $user , $pass) ;
}catch(PDOExcption $e){
	echo "Connection failed".$e->getMessage() ;
}
///write some sql code for query 

$sql = "select * from tbl_user";

$result = $pdo->query($sql);
foreach($result as $value ){
	echo $value['name']." ".$value['email']." ".$value['skill']."<br>";
}



?>
<?php
include 'inc/footer.php';
?>