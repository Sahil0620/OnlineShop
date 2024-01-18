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
<?php include("a1.php");?>
<h1>Admin Registration</h1>
<?php
    if(isset($_POST["B1"]))
    {
        $name=$_POST["T1"];
        $address=$_POST["T2"];
        $contact=$_POST["T3"];
        $email=$_POST["T4"];
        $password=$_POST["T5"];
        $confirm=$_POST["T6"];
        $usertype="admin";
        $pass=md5($password);
        if($password!=$confirm)
        {
            ?>
            <h3>Password not matched</h3>
            <h3><a href="AdminReg.php">Fill Again</a></h3>
            <?php
        }
        else
        {
            //crete connection to mysql
            require_once("../includes/Mylib.php");
            //create valid sql
            $a1="insert into admindata values ('$name','$address','$contact','$email')";
            $a2="insert into logindata values ('$email','$pass','$usertype')";
            //send data to tables
            $n1=mysqli_query($conn,$a1);
            $n2=mysqli_query($conn,$a2);
            $msg="";
            if($n1==1&&$n2==1)
            {
                $msg="Data saved and Login Created";
            }
            elseif($n1==1)
            {
                $msg="Data saved but login not created";
            }
            elseif($n2==1)
            {
                $msg="Data not saved but login is created";
            }
            else
            {
                $msg="Neither Data is saved nor login is created";
            }
            ?>
                <h3><?php echo $msg;?></h3>
                <h3><a href="AdminReg.php">Continue</a></h3>
<?php
        }
    }
else
{
    
    header("location:AdminReg.php");

}
?>
<?php include("a2.php");?>
