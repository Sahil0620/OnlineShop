 <?php 

session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$um=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="user")
{
	header("Location:../AuthError.php");
	die();
}
?>

<?php if(isset($_POST["B2"]))
	{
		require_once("../includes/Mylib.php");
    	$mn=$_POST["mn"];
    	$pr=$_POST["pr"];
	    $ph=$_POST["ph"];
    	$um=$_POST["um"];
    	$em=$_POST["em"];
		$mid=$_POST["mid"];

		
		$sql1="insert into user_cart values('$mn','$pr','$ph','$um','$em','$mid')";
    	$n1=mysqli_query($conn,$sql1);
		
		if($n1==1)
		{
			header("location:add in cart1.php");
		}
		elseif($n1==0)
		{
			header("location:buy.php");
		}
	}
elseif(isset($_POST["D1"]))
	{
		require_once("../includes/Mylib.php");
		
    	$mn=$_POST["mn"];

		$sql1="delete from user_cart where med_name='$mn' and user_email='$um'";
    	$n1=mysqli_query($conn,$sql1);
		
		if($n1==1)
		{
			header("location:add in cart1.php");
		}
		elseif($n1==0)
		{
			header("location:add in cart1.php");
		}
	}
elseif(isset($_POST["S1"]))
	{
		require_once("../includes/Mylib.php");
    	$mn=$_POST["mn"];
    	$pr=$_POST["pr"];
		$ph=$_POST["ph"];

    	$ue=$_POST["um"];
    	$em=$_POST["em"];
	$mid=$_POST["mid"];
		
		$sql="insert into p_data values('$mn','$pr','$ph','$um','$em','$mid')";
    	$n1=mysqli_query($conn,$sql);
		$sql1="delete from user_cart where med_name='$mn' and user_email='$um'";
    	$n2=mysqli_query($conn,$sql1);
		if($n1==1)
		{
			header("location:add in cart1.php");
		}
		elseif($n1==0)
		{
			header("location:add in cart1.php");
		}
	}


elseif(isset($_POST["D2"]))
	{
		require_once("../includes/Mylib.php");
		
    	$mn=$_POST["mn"];

		$sql1="delete from p_data where med_name='$mn' and user_email='$um'";
    	$n1=mysqli_query($conn,$sql1);
		
		if($n1==1)
		{
			header("location:add in cart1.php");
		}
		elseif($n1==0)
		{
			header("location:add in cart1.php");
		}
	}
elseif(isset($_POST["S2"]))
	{
		require_once("../includes/Mylib.php");
		$ph=$_POST["ph"];
    	$mn=$_POST["mn"];
    	$pr=$_POST["pr"];
    	$um=$_POST["um"];
    	$em=$_POST["em"];
	$mid=$_POST["pid"];
		
		$sql="insert into user_cart values('$ph','$mn','$pr','$um','$em','$mid')";
    	$n1=mysqli_query($conn,$sql);
		$sql1="delete from P_data where med_name='$mn' and user_email='$um'";
    	$n2=mysqli_query($conn,$sql1);
		if($n1==1)
		{
			header("location:add in cart1.php");
		}
		elseif($n1==0)
		{
			header("location:add in cart1.php");
		}
	}
?>