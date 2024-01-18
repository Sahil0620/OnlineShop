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
<h1>Show Sellers</h1>
<?php
    require_once("../includes/Mylib.php");
    $sql="select * from sellerdata";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    if($n>0)
    {
        while($rw=mysqli_fetch_array($result))
        {
            $sn=$rw["seller"];
            $on=$rw["owner_name"];
            $gst=$rw["gst_no"];
            $ad=$rw["address"];
            $cn=$rw["contact"];
            $email=$rw["email"];
            ?>
            <h3><?php echo $sn;?></h3>
            <p>Owner name:-<?php echo $on;?></p>
            <p>GST NO.:-<?php echo $gst;?></p>
            <p>Address:-<?php echo $ad;?></p>
            <p>Contact:-<?php echo $cn;?></p>
            <p>Email:-<?php echo $email;?></p>
            <form method="post" action="editseller.php">
                <input type="hidden" name="t1" value="<?php echo $email;?>">
                <input type="submit" name="B1" value="Edit">
                
            </form>
                <form method="post" action="deleteseller.php">
                <input type="hidden" name="t1" value="<?php echo $email;?>">
                <input type="submit" name="B1" value="Delete">
                
            </form>

            <?php
        }
    }
    else
    {
        ?>
        <h3>No Seller in data base</h3>
        <h2><a href="SellerReg.php">Sellers</a></h2>
<?php
    }
?>
  <?php include("a2.php"); ?>