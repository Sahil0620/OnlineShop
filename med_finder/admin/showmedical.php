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
<h1 class="hi" style="">Medical Store</h1>
<?php
require_once("../includes/Mylib.php");
$sql="select * from medicaldata";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
    while($rw=mysqli_fetch_array($result))
    {
        $mn=$rw["medical_name"];
        $ow=$rw["owner_name"];
        $ln=$rw["lno"];
        $cont=$rw["contact"];
        $ads=$rw["address"];
        $email=$rw["email"];
        ?>
          <h3><?php echo $mn;?></h3>
        <p class="pi">Owner: <?php echo $ow;?></p>
        <p class="pi">License No.: <?php echo $ln;?></p>
        <p class="pi">Contact: <?php echo $cont;?></p>
        <p class="pi">Email: <?php echo $email;?></p>
        <p class="pi">Address: <?php echo $ads;?></p>

        <table>
            <tr>
            <td><form method="post" action="editmedical.php">
                <input type="hidden" name="H1" value="<?php echo $email;?>">
                <input type="submit" name="B1" value="Edit">
            </form></td>
            <td><form method="post" action="deletemedical.php">
                <input type="hidden" name="H1" value="<?php echo $email;?>">
                <input type="submit" name="B1" value="Delete">
            </form></td></tr>
        </table><hr>
        
             <?php
    }
}
else
{
    ?>
    <h3 class="si">No Medical data found in the Database</h3>
    <h2><a href="medicalReg.php">Add Medical</a></h2>
    <?php
}
?>
<?php include("b2.php");?>