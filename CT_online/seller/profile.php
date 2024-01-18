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
if($u!="seller")
{
	header("Location:../AuthError.php");
	die();
}
?>

<?php include("s1.php"); ?>
<h1>Profile</h1>

<?php

	require_once("../includes/Mylib.php");
	$sql="select * from sellerdata where email='$e1'";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    if($n>0)
    {
        $rw=mysqli_fetch_array($result);
            $name=$rw["owner_name"];
            $ad=$rw["address"];
            $cn=$rw["contact"];
            $email=$rw["email"];
			$pp=$rw["pp"];
			
			if($pp=="no")
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
     ?>
    <img src="photos/<?php echo $pp;?>" width="100" height="150"/>
    <?php
}
			
			
            ?>
            <h3><?php echo $name;?></h3>
            <p>Address:-<?php echo $ad;?></p>
            <p>Contact:-<?php echo $cn;?></p>
            <p>Email:-<?php echo $email;?></p>
            <form method="post" action="editseller.php">
            	<input type="hidden" value="<?php echo $email;?>" name="t1">
                <input type="submit" value="Edit Profile" name="B1">
            </form>
            <?php
    }
?>
  <?php include("s2.php"); ?>