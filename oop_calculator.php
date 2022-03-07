<?php
include 'inc/header.php';
?>

<form action="" method="post">
	<table>
		<tr>
			<td>Enter First Number : </td>
			<td><input type="number" name="fnumber" /></td>
		</tr>
		<tr>
			<td>Enter Second Number : </td>
			<td><input type="number" name="snumber" /></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit" />
				<input type="reset" value="Clear"/>
			</td>
		</tr>
	</table>
</form>
<?php
	class Calculator{
		 
		public function add($number1 , $number2){
			return ($this->number1=$number1) + ($this->number2=$number2);
		}
		public function sub($number1,$number2){
			return ($this->number1=$number1) - ($this->number2=$number2);
		}
		public function mul($number1,$number2){
			return ($this->number1=$number1) * ($this->number2=$number2);
		}
		public function div($number1,$number2){
			return ($this->number1=$number1) / ($this->number2=$number2);
		}
	}
	if(isset($_POST['submit'])){
		
		$test = new Calculator() ;
		$number1f = $_POST['fnumber'];
		$number1s = $_POST['snumber'];
		 
		echo "The addition is = ". $test->add($number1f,$number1s)."<br>";
		echo "The Subtraction is = ". $test->sub($number1f,$number1s)."<br>";
		echo "The Multiplication is = ". $test->mul($number1f,$number1s)."<br>";
		echo "The division is = ". $test->div($number1f,$number1s)."<br>";
		
		
	}


?>




<?php
include 'inc/footer.php';
?>