<?php include "inc/header.php"; ?>



<?php 

class Person{
	public $name ;
	public $age ;
	
	public function nationality($data){
		echo "The Natinonality is ". $data ."<br>";
	}
	public function set_properties($name , $age){
		$this->name = $name ;
		$this->age = $age ;
	}
	public function print_pro(){
		echo "The name is = ".$this->name ."<br>";
		echo "And age is = ".$this->age ."<br>";
	}
}
/// create object type variable here below
$rubel = new Person() ;
$rubel->nationality("Bangladeshi");
$rubel->set_properties("Rubel Hossain"," 28 ");
$rubel->print_pro();

echo "<br><br>";

 ///create again object variable 
 $rasel = new Person() ;
 $rasel->nationality("Bangladeshi");
 $rasel->set_properties("Rasel Hossain"," 26 ");
 $rasel->print_pro();
 
 

?>

		

<?php include "inc/footer.php"; ?>