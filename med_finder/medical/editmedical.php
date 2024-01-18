<?php 
//check session
session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$e11=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="medical")
{
	header("Location:../AuthError.php");
	die();
}
?>
<?php include("c1.php");?>
<h1 class="hi">Edit Medical Profile</h1>
<?php
    if(isset($_POST["B1"]))
    {
        require_once("../includes/Mylib.php");
        $sql="select * from medicaldata where email='$e11'";
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
                <form method="post" action="">
                    <p class="pi">Medical Name: <input type="text" name="T1" value="<?php echo $mn;?>"></p>
                    <p class="pi">Owner: <input type="text" name="T2" value="<?php echo $ow;?>"></p>
                    <p class="pi">License No.: <input type="text" name="T3" value="<?php echo $ln;?>"></p>
                    <p class="pi">Contact: <input type="text" name="T4" value="<?php echo $cont;?>"></p>
                    <p class="pi">Address: <input type="text" name="T6" value="<?php echo $ads;?>"></p>
                    <p class="pi">Email: <input type="text" readonly name="T5" value="<?php echo $e11;?>">
                    </p>
                    <input type="submit" value="Edit" name="B2">
                </form>
            <?php
        }
    }
elseif(isset($_POST["B2"]))
    {
        $mn=$_POST["T1"];
        $ow=$_POST["T2"];
        $ln=$_POST["T3"];
        $cont=$_POST["T4"];
        $ads=$_POST["T6"];
        require_once("../includes/Mylib.php");
        $sql="update medicaldata set medical_Name='$mn',owner_name='$ow',lno='$ln',contact='$cont',address='$ads' where email='$e11'";
        mysqli_query($conn,$sql);
        $n=mysqli_affected_rows($conn);
        if($n==1)
        {
            ?>
            <h2 class="si">Profile Changed Successfully</h2>
            <h1><a href="MedicalHome.php">Home</a></h1>
            <?php
        }
        else
        {
            ?>
            <h2 class="si">Profile not Changed</h2>
            <h1><a href="MedicalHome.php">Home</a></h1>
            <?php
        }
    }
else
{
    header("location:MedicalHome.php");
    die();
}
?>
<?php include("c2.php");?>