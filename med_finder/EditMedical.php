<h1>Edit and Save</h1>

<?php 
if(isset($_POST["B1"]))
{
	//Create connection between mysql and php
	$conn=mysqli_connect("localhost","root","","med_finder");
	if(!$conn)
	{
		echo "<h3>Unable to connect</h3>";
		die();
	}
	$email=$_POST["H1"];
	$sql="select * from medicaldata where email='$email'";
	$result=mysqli_query($conn,$sql);
	$n=mysqli_num_rows($result);
	if($n>0)
	{
		$rw=mysqli_fetch_array($result);
		
		$name=$rw["medical_name"];
		$owner=$rw["owner"];
		$lno=$rw["lno"];
		$address=$rw["address"];
		$contact=$rw["contact"];
		$email=$rw["email"];
		?>
		
		<form method="post" action="EditMedical2.php">
            <p>Name <input value="<?php echo $name; ?>" type="text" name="T1" /></p>
            <p>Owner <input value="<?php echo $owner; ?>" type="text" name="T2" /></p>
            <p>License  <input value="<?php echo $lno; ?>" type="text" name="T3" /></p>
            <p>Address <input value="<?php echo $address; ?>" type="text" name="T4" /></p>
            <p>Contact <input value="<?php echo $contact; ?>" type="text" name="T5" /></p>
            <p>Email <input readonly value="<?php echo $email; ?>" type="text" name="T6" /></p>
			<input type="submit" name="B1" value="Edit" />
		</form>
		
		
		<?php
		
	}
}
else
{
	header("Location:ShowMedicals.php");	
	die();
}
	
?>