<?php include "inc/header.php"; ?>




<?php 


 class Person{
    public $name;
    public $age;

    public function personName(){
      echo "Person Name: ".$this->name;
    }
 
    public function personAge($age){
    echo $this->age = $age;
    }

}

$personOne = new Person;
$personOne->name = "Akbar Hossain";
$personOne->personName();
echo "<br>";

$personOne->personAge("28");



?>

		















<?php include "inc/footer.php"; ?>