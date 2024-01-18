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
<h1>Show Admins</h1>
<?php
    require_once("../includes/Mylib.php");
    $sql="select * from admindata";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    if($n>0)
    {
        while($rw=mysqli_fetch_array($result))
        {
            $name=$rw["name"];
            $ad=$rw["address"];
            $cn=$rw["contact"];
            $email=$rw["email"];
            ?>
            <h3><?php echo $name;?></h3>
            <p>Address:-<?php echo $ad;?></p>
            <p>Contact:-<?php echo $cn;?></p>
            <p>Email:-<?php echo $email;?></p>
            
            <?php
        }
    }
    else
    {
        ?>
        <h3>No Admins in data base</h3>
        <h2><a href="AdminReg.php">Admins</a></h2>
<?php
    }
?>
  <?php include("a2.php"); ?>