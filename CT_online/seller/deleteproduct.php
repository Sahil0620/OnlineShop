<?php
    session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:../AuthError.php");
        die();
    }
$e1=$_SESSION["email"];
$ut=$_SESSION["usertype"];
if($ut!="seller")
{
    header("location:../AuthError.php");
    die();
}
?>
<?php include("s1.php");?>
<h1>delete product</h1>
<?php
  if(isset($_POST["B1"]))
  {
      $pid=$_POST["H1"];
      ?>
        <h3>You want to delete the Product Data</h3>
        <form method="post" action="deleteproduct.php">
            <input type="hidden" name="s6" value="<?php echo $pid;?>">
            <input type="submit" value="YES" name="B2">
        </form>
        <form method="post" action="showproduct.php">
            <input type="submit" value="NO">
        </form>
<?php
  }
elseif(isset($_POST["B2"]))
{
    require_once("../includes/Mylib.php");
    $pid=$_POST["s6"];
    $sql="delete from productdata where product_id='$pid'";
    mysqli_query($conn,$sql);
    $n=mysqli_affected_rows($conn);
    if($n==1)
    {
        ?>
        <h2>product is deleted</h2>
        <?php
    }
    else
    {
        ?>
        <h2>product is not deleted</h2>
        <?php
    
    }
}
/*else
    {

    header("location:showproduct.php");
        die();
    }*/

?>
<?php include("s2.php");?>