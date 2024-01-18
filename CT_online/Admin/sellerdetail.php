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

<?php include("a1.php"); ?>
<?php
if(isset($_POST["B1"]))
{
    require_once("../includes/Mylib.php");
	$email=$_POST["t1"];
	
	$sql="select * from sellerdata where email='$email'";
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
            
            <?php
    }
}
?>
<?php include("a2.php"); ?>
