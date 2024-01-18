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
<h1 class="hi">Admin in Database</h1>

<?php
require_once("../includes/Mylib.php");
$sql="select * from admindata";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
    while($rw=mysqli_fetch_array($result))
    {
        $an=$rw["name"];
        $cont=$rw["contact"];
        $ads=$rw["address"];
        $email=$rw["email"];
        ?>
        <h3 style="color: darkmagenta; font-weight: bold;">Name: <?php echo $an;?></h3>
        <p class="pi">Address: <?php echo $ads;?></p>
        <p class="pi">Contact: <?php echo $cont;?></p>
        <p class="pi">Email: <?php echo $email;?></p>
        <hr>
            <?php
    }
}
else
{
    ?>
    <h3 class="si">No Admin data found in the Database</h3>
    <h2><a href="AdminReg.php">Add Admin</a></h2>
    <?php
}
?>
<?php include("b2.php");?>