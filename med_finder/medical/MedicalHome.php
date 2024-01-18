<?php
    session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:../AuthError.php");
        die();
    }
$e11=$_SESSION["email"];
$ut=$_SESSION["usertype"];
if($ut!="medical")
{
    header("location:../AuthError.php");
    die();
}
?>
<?php include("c1.php");?>
<h1>MedicalHome</h1>
<?php
require_once("../includes/Mylib.php");
$photo=getphoto($e11);
if($photo=="no")
{
    ?>
    <form method="post" action="UploadPhoto.php" enctype="multipart/form-data">
    <p>
        <input type="file" name="F1"/>
        <input type="submit" name="B1" value="Upload"/>
    </p>
</form>
<?php
}
else
{
    ?>
    <img src="photos/<?php echo $photo;?>" width="100" height="125" />
<?php
}

?>
<?php
$sql="select * from medicaldata where email='$e11'";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
    $rw=mysqli_fetch_array($result);
    $mn=$rw["medical_name"];
    $on=$rw["owner_name"];
    $lno=$rw["lno"];
    $ads=$rw["address"];
    $co=$rw["contact"];
}
?>
<h2>Medical Name: <?php echo $mn;?></h2>
<p>Owner Name: <?php echo $on;?></p>
<p>Licence No. : <?php echo $lno;?></p>
<p>Address: <?php echo $ads;?></p>
<p>Contact: <?php echo $co;?></p>
<p>Email: <?php echo $e11;?></p>
<p><form method="post" action="editmedical.php">
    <input type="submit" name="B1" value="Edit" />
</form>
<form method="post" action="MedicalPassword.php">
    <input type="submit" name="B1" value="Change Password" />
</form></p>

<?php include("c2.php");?>