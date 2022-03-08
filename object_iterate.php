<?php
include 'inc/header.php';
?>

<?php
class Person{
	public $name ="rubel hossain";
	public $age = "28";
	public $skill ="Computer Programmer";
	
	private $email = "rubelphp94@gmail.com";
	protected $pass = "0123456789";
	
	public function iterate(){
		echo "This is inside class <br>";
		foreach($this as $value ){
		echo $value ."<br>";
	}
	}
}


$rubel = new Person;
$rubel->iterate();
echo "<br>";
echo "Outside the clss<br>";

foreach($rubel as $value ){
	echo $value ."<br>";
}

?>

<?php

include 'inc/footer.php';

?>