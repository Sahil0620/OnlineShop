 
 <h1>your cart</h1>
<?php
   if(isset($_POST["B1"]))
  {
      $id=$_POST["id"];
      ?>
        <h3>You want to remove cart Data</h3>
        <form method="post" action="deletecarrt.php">
            <input type="hidden" name="id" value="<?php echo $id;?>" >
            <input type="submit" value="YES" name="B2">
        </form>
        <form method="post" action="medical/cart.php">
            <input type="submit" value="NO">
        </form>
<?php
  }
elseif(isset($_POST["B2"]))
{
    $id=$_POST["id"];
    $conn=mysqli_connect("localhost","root","","med_finder");
    if(!$conn)
    {
        echo "<h3>Unable to Connect</h3>";
        die();
    }
    $sql="delete from user_cart where user_id='$id'";
    mysqli_query($conn,$sql);
    $n=mysqli_affected_rows($conn);
    if($n==1)
    {
        ?>
        <h2>Medicine is remove</h2>
       f
          <input type="button" value="back" formaction="cart.php"/>
          <?php
    }
    else
    {
        ?>
        <h2>Medicine is not remove</h2>
        <?php
    
    }
}
else
    {

    header("location:cart.php");
        die();
    }

?>
 