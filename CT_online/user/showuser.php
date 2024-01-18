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
if($u!="user")
{
  header("Location:../AuthError.php");
  die();
}
?>
<?php include("u1.php");?>

<h1>Show Users</h1>
<?php
require_once("../includes/Mylib.php");
$sql="select * from userdata where email='$e1'";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);

if($n>0)
{
    $rw=mysqli_fetch_array($result);
    $n=$rw["name"];
    $g=$rw["gender"];
    $dob=$rw["dob"];
    $email=$rw["email"];;
    $cn=$rw["contact"];
    $ad=$rw["address"];
    $di=$rw["district"];
    $st=$rw["state"];
    $cou=$rw["country"];
    $pi=$rw["pincode"];
    
    ?><h3><?php echo $n;?></h3>
        <p>Gender:-<?php echo $g;?></p>
        <p>DOB:-<?php echo $dob;?></p>
        <p>Email:-<?php echo $email;?></p>
        <p>Contact:-<?php echo $cn;?></p>
        <p>Address:-<?php echo $ad;?></p>
        <p>District:-<?php echo $di;?></p>
        <p>State:-<?php echo $st;?></p>
        <p>Country:-<?php echo $cou;?></p>
        <p>Pincode:-<?php echo $pi;?></p>
<?php

}
?>
<?php include("u2.php");?>