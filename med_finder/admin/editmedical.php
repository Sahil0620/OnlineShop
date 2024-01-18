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
        require_once("../includes/Mylib.php");
        $email=$_POST["H1"];
        $sql="select * from medicaldata where email='$email'";
        $result=mysqli_query($conn,$sql);
        $n=mysqli_num_rows($result);
        if($n>0)
        {
            $rw=mysqli_fetch_array($result);
                $mn=$rw["medical_name"];
                $ow=$rw["owner_name"];
                $ln=$rw["lno"];
                $cont=$rw["contact"];
                $ads=$rw["address"];
            ?>
                <form method="post" action="editmedical2.php">
                    <p class="pi">Medical Name: <input type="text" name="T1" value="<?php echo $mn;?>"></p>
                    <p class="pi">Owner: <input type="text" name="T2" value="<?php echo $ow;?>"></p>
                    <p class="pi">License No.: <input type="text" name="T3" value="<?php echo $ln;?>"></p>
                    <p class="pi">Contact: <input type="text" name="T4" value="<?php echo $cont;?>"></p>
                    <p class="pi">Address: <input type="text" name="T6" value="<?php echo $ads;?>"></p>
                    <p class="pi">Email: <input type="text" readonly name="T5" value="<?php echo $email;?>">
                    </p>
                    <input type="submit" value="Edit" name="B1">
                </form>
            <?php
        }
    }
else
{
    header("location:showmedical.php");
    die();
}
?>
<?php include("b2.php");?>