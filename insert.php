<?php
include 'inc/header.php';


$conn = new mysqli("localhost", "root", "","userdata");


if($conn ->connect_error){
	die("Connection faild".$conn->connect_error);
}else{
	//echo "Connection successfully!";
}


?>

<form action = "" method ="post">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" /></td>
		</tr>
		<tr>
			<td>Skill:</td>
			<td><input type="text" name="skill"></td>
		</tr>
		
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Submit" name="submit" />
				<input type="reset" value="Clear" />
			</td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'] ;
		$email = $_POST['email'];
		$skill = $_POST['skill'];
		 
		
		$sql = "INSERT INTO `tbl_user`(`name`,`email`,`skill`)value('$name','$email','$skill')";
		
		$result = $conn->query($sql);
		
		if($result === true){
			echo "<span style='color : green'>Data inserted successfully</span>";
		}else{
			echo "Data not inserted successfully";
		}
		
	}
$conn->close();
?>
<?php

include 'inc/footer.php';
?>