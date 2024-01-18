<h1>Edit and Save</h1>
<?php 
if(isset($_POST["B1"]))
{
	//Receive form data
	$name=$_POST["T1"];
	$owner=$_POST["T2"];
	$lno=$_POST["T3"];
	$address=$_POST["T4"];
	$contact=$_POST["T5"];
	$email=$_POST["T6"];
	//Create connection between mysql and php
	$conn=mysqli_connect("localhost","root","","med_finder");
	if(!$conn)
	{
		echo "<h3>Unable to connect</h3>";
		die();
	}
	$sql="update medicaldata set medical_name='$name',owner='$owner',lno='$lno',address='$address',contact='$contact' where email='$email'";
	mysqli_query($conn,$sql);
	$n=mysqli_affected_rows($conn);
	if($n==1)
	{
		?>
		<h2>Data saved</h2>
		<?php
	}
	else
	{
		?>
		<h2>Data not saved</h2>
		<?php
	}
}
else
{
	header("location:ShowMedicals.php");
	die();
}
?>
<h3><a href="ShowMedicals.php">Continue</a></h3>