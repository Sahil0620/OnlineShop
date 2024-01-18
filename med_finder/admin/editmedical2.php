<?php 
//check session
session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$e1=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="admin")
{
	header("Location:../AuthError.php");
	die();
}
?>
<?php include("b1.php");?>
<h1 class="hi">Edit and Save</h1>
<?php
    if(isset($_POST["B1"]))
    {
        $mn=$_POST["T1"];
        $ow=$_POST["T2"];
        $ln=$_POST["T3"];
        $cont=$_POST["T4"];
        $ads=$_POST["T6"];
        $email=$_POST["T5"];
        require_once("../includes/Mylib.php");
        $sql="update medicaldata set medical_Name='$mn',owner_name='$ow',lno='$ln',contact='$cont',address='$ads' where email='$email'";
        mysqli_query($conn,$sql);
        $n=mysqli_affected_rows($conn);
        if($n==1)
        {
            ?>
            <h2 class="si">Data Saved</h2>
            <h1><a href="showmedical.php">Show The Medical Data</a></h1>
            <?php
        }
        else
        {
            ?>
            <h2 class="si">Data not Saved</h2>
            <?php
        }
    }
else
{
    header("location:showmedical.php");
    die();
}
?>
 <h3 class="pi"><a href="showmedical.php">Show the Data</a></h3> 
<?php include("b2.php");?>