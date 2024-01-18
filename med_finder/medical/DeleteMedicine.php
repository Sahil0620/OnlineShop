<?php
    session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:../AuthError.php");
        die();
    }
$email=$_SESSION["email"];
$ut=$_SESSION["usertype"];
if($ut!="medical")
{
    header("location:../AuthError.php");
    die();
}
?>
<?php include("c1.php");?>
<h1>delete medicine</h1>
<?php
  if(isset($_POST["B1"]))
  {
      $mid=$_POST["mid"];
      ?>
        <h3>You want to delete the Medicine Data</h3>
        <form method="post" action="DeleteMedicine.php">
            <input type="hidden" name="mid" value="<?php echo $mid;?>" >
            <input type="submit" value="YES" name="B2">
        </form>
        <form method="post" action="ShowMedicine.php">
            <input type="submit" value="NO">
        </form>
<?php
  }
elseif(isset($_POST["B2"]))
{
    $mid=$_POST["mid"];
    $conn=mysqli_connect("localhost","root","","med_finder");
    if(!$conn)
    {
        echo "<h3>Unable to Connect</h3>";
        die();
    }
    $sql="delete from medicines where med_id='$mid'";
    mysqli_query($conn,$sql);
    $n=mysqli_affected_rows($conn);
    if($n==1)
    {
        ?>
        <h2>Medicine is deleted</h2>
        <?php
    }
    else
    {
        ?>
        <h2>Medicine is not deleted</h2>
        <?php
    
    }
}
else
    {

    header("location:ShowMedicine.php");
        die();
    }

?>
<?php include("c2.php");?>