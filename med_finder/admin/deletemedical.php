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
<h1>Delete</h1>
<?php
    
    if(isset($_POST["B1"]))
    {
        $email=$_POST["H1"];
        ?>
        <h3>You want to delete the data?</h3>
        <form method="post" action="">
            <input type="hidden" value="<?php echo $email;?>" name="H1">
            <input type="submit" value="Yes" name="y1">
        </form>
        <form method="post" action="showmedical.php">
            <input type="submit" value="NO">
        </form>

        <?php
    }
    elseif(isset($_POST["y1"]))
        {
            $email=$_POST["H1"];
            require_once("../includes/Mylib.php");
            $sql="delete from medicaldata where email='$email'";
            mysqli_query($conn,$sql);
            $n=mysqli_affected_rows($conn);
            if($n==1)
            {
                ?>
                <h2>Data is Deleted</h2>
                <?php
            }
            else
            {
                ?>
                <h2>Data is not Deleted</h2>
                <?php
            }
        }
else
{
    header("location:showmedical.php");
    die();
}
?>
<h3><a href="showmedical.php">Show the Data</a></h3>

<?php include("b2.php");?>