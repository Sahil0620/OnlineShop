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
<h1>Medical Registration</h1>
<?php
    if(isset($_POST["B1"]))
    {
        $mn=$_POST["p1"];
        $on=$_POST["p2"];
        $lno=$_POST["p3"];
        $cn=$_POST["p4"];
        $email=$_POST["p5"];
        $address=$_POST["p6"];
        $ps=$_POST["p7"];
        $pass=md5($ps);
        $cp=$_POST["p8"];
        $usertype="medical";
        
        
        
            require_once("../includes/Mylib.php");
            $a1="insert into medicaldata values ('$mn','$on','$lno','$address','$cn','$email')";
            $a2="insert into logindata values ('$email','$pass','$usertype')";
            
            $n1=mysqli_query($conn,$a1);
            $n2=mysqli_query($conn,$a2);
            $msg="";
            if($n1==1&&$n2==1)
            {
                $msg="Data saved and Login is Created";
            }
            elseif($n1==1)
            {
                $msg="Data is saved but Login is not Created";
            }
            elseif($n2==1)
            {
                $msg="Data is not saved but Login is created";
            }
            else
            {
                $msg="Neither Data is save nor login is created";
            }
            ?>
<h3><?php echo $msg;?></h3>
<h3><a href="medicalReg.php">Continue</a></h3>
<?php
        
    }
else
{
    ?>
<h3><a href="medicalReg.php">Fill form</a></h3>
<?php
}
?>
<?php include("b2.php");?>