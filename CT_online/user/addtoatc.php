<?php 

session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$e1=$_SESSION["email"];
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
		$pp=$_POST["pp"];
    	$pn=$_POST["pn"];
    	$pr=$_POST["pr"];
    	$ue=$_POST["ue"];
    	$em=$_POST["em"];
	$pid=$_POST["pid"];
		
		$sql1="insert into atcdata values('$pp','$pn','$pr','$ue','$em','$pid')";
    	$n1=mysqli_query($conn,$sql1);
		
		if($n1==1)
		{
			header("location:atc.php");
		}
		elseif($n1==0)
		{
			header("location:projectpage.php");
		}
	}
elseif(isset($_POST["D1"]))
	{
		require_once("../includes/Mylib.php");
		
    	$pn=$_POST["pn"];

		$sql1="delete from atcdata where product_name='$pn' and user_email='$e1'";
    	$n1=mysqli_query($conn,$sql1);
		
		if($n1==1)
		{
			header("location:atc.php");
		}
		elseif($n1==0)
		{
			header("location:atc.php");
		}
	}
elseif(isset($_POST["S1"]))
	{
		require_once("../includes/Mylib.php");
		$pp=$_POST["pp"];
    	$pn=$_POST["pn"];
    	$pr=$_POST["pr"];
    	$ue=$_POST["ue"];
    	$em=$_POST["em"];
	$pid=$_POST["pid"];
		
		$sql="insert into sfldata values('$pp','$pn','$pr','$ue','$em','$pid')";
    	$n1=mysqli_query($conn,$sql);
		$sql1="delete from atcdata where product_name='$pn' and user_email='$e1'";
    	$n2=mysqli_query($conn,$sql1);
		if($n1==1)
		{
			header("location:atc.php");
		}
		elseif($n1==0)
		{
			header("location:atc.php");
		}
	}


elseif(isset($_POST["D2"]))
	{
		require_once("../includes/Mylib.php");
		
    	$pn=$_POST["pn"];

		$sql1="delete from sfldata where product_name='$pn' and user_email='$e1'";
    	$n1=mysqli_query($conn,$sql1);
		
		if($n1==1)
		{
			header("location:atc.php");
		}
		elseif($n1==0)
		{
			header("location:atc.php");
		}
	}
elseif(isset($_POST["S2"]))
	{
		require_once("../includes/Mylib.php");
		$pp=$_POST["pp"];
    	$pn=$_POST["pn"];
    	$pr=$_POST["pr"];
    	$ue=$_POST["ue"];
    	$em=$_POST["em"];
	$pid=$_POST["pid"];
		
		$sql="insert into atcdata values('$pp','$pn','$pr','$ue','$em','$pid')";
    	$n1=mysqli_query($conn,$sql);
		$sql1="delete from sfldata where product_name='$pn' and user_email='$e1'";
    	$n2=mysqli_query($conn,$sql1);
		if($n1==1)
		{
			header("location:atc.php");
		}
		elseif($n1==0)
		{
			header("location:atc.php");
		}
	}
?>