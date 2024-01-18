<h1>Admin Registration</h1>

<?php 
if(isset($_POST["B1"]))
{
	//Receive form data
	$name=$_POST["T1"];
	$address=$_POST["T2"];
	$contact=$_POST["T3"];
	$email=$_POST["T4"];
	$password=$_POST["T5"];
	$confirm=$_POST["T6"];
	$usertype="admin";
	if($password!=$confirm)
	{
		?>
		<h3>Password not matched</h3>
        <h3><a href="AdminReg.php">Fill again</a></h3>
		<?php
	}
	else
	{
		//Create connection between mysql and php
		$conn=mysqli_connect("localhost","root","","med_finder");
		if(!$conn)
		{
			echo "<h3>Unable to connect</h3>";
			die();
		}
		//create valid sql commands
		$a1="insert into admindata values('$name','$address','$contact','$email')";
		$a2="insert into logindata values('$email','$password','$usertype')";
		
		//send data to tables
		$n1=mysqli_query($conn,$a1);
		$n2=mysqli_query($conn,$a2);
		$msg="";
		if($n1==1 && $n2==1)
		{
			$msg="Data saved and login created";
		}
		elseif($n1==1)
		{
			$msg="Data saved but Login not created";
		}
		elseif($n2==1)
		{
			$msg="Data not saved but Login created";
		}
		else
		{
			$msg="Not data saved and no login created";
		}
		
		?>
		<h3><?php echo $msg; ?></h3>
        <h3><a href="AdminReg.php">Continue</a></h3>
		<?php
	}
}
else
{
	?>
	<h3><a href="AdminReg.php">Fill Form</a></h3>
	<?php
}
?>