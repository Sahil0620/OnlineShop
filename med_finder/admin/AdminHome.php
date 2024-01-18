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
<h1>Admin Home</h1>
<?php
require_once("../includes/Mylib.php");
$photo=getphoto($e1);
if($photo=="no")
{
    ?>
<form method="post" action="UploadPhoto.php" enctype="multipart/form-data">
<p>
    <input type="file" name="F1" />
    <input type="submit" name="B1" value="Upload" />
    </p>
</form>

<?php
}
else
{
     ?><div class="container">
    <img src="photos/<?php echo $photo;?>" width="200" height="150"/>
    </div>
<?php
}
?>
<?php
    $sql="select * from admindata where email='$e1'";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    if($n>0)
    {
        $rw=mysqli_fetch_array($result);
        $an=$rw["name"];
        $ad=$rw["address"];
        $cn=$rw["contact"];
    }
?>
<div  class="container">
<h4>Admin name: <?php echo $an; ?></h4>
<h5>Address: <?php echo $ad; ?></h5>
<h5>Contact: <?php echo $cn; ?></h5>
<h5>Email: <?php echo $e1; ?></h5>
<form method="post" action="EditAdmin.php">
    <input type="hidden" value="<?php echo $e1;?>" name="T1">
    <input type="submit" name="B1" value="Edit">
</form>
<form method="post" action="AdminPassword.php">
    <input type="hidden" value="<?php echo $e1;?>" name="T1">
    <input type="submit" name="B1" value="Change Password">
</form></div>

<?php include("b2.php");?>