<?php
include 'inc/header.php';
//include 'inc/footer.php';
?>
<?php

class User{
	public $user ;
	public $user_id ;
	///how to declare constant in oop
	const Name = "Rubel hossain";
	function __construct($user_name , $user_id){
		$this->user = $user_name ;
		$this->user_id = $user_id ;
		
		echo "The username is = {$this->user} and userid is = {$this->user_id}<br>";
	}
	function __destruct(){
		unset($this->user);
		unset($this->user_id);
	}
	function display(){
		echo "Print the constant in this line ".User::Name;
	}
}
///create object type variable here 
$user_name = "Rubel hossain";
$user_id = "26";
$user = new User($user_name , $user_id);
$user->display();

?>

<?php

include 'inc/footer.php';

?>