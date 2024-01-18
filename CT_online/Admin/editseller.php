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

<?php include("a1.php");?>
<h1>Edit Seller</h1>
<?php
    if(isset($_POST["B1"]))
    {
        require_once("../includes/Mylib.php");
        $email=$_POST["t1"];
        $sql="select * from sellerdata where email='$email'";
        $result=mysqli_query($conn,$sql);
        $n=mysqli_num_rows($result);
        
        if($n>0)
        {
            $rw=mysqli_fetch_array($result);
            $sn=$rw["seller"];
            $on=$rw["owner_name"];
            $gst=$rw["gst_no"];
            $ad=$rw["address"];
            $cn=$rw["contact"];
            $email=$rw["email"];
            ?>
            <form method="post" action="">
            <p>Seller:-<input type="text" name="p1" value="<?php echo $sn;?>"></p>
            <p>Owner name:-<input type="text" name="p2" value="<?php echo $on;?>"></p>
            <p>GST NO.:-<input type="text" name="p3" value="<?php echo $gst;?>"></p>
            <p>Address:-<input type="text" name="p4" value="<?php echo $ad;?>"></p>
            <p>Contact:-<input type="text" name="p5" value="<?php echo $cn;?>"></p>
            <p>Email:-<input readonly type="text" name="p6" value="<?php echo $email;?>"></p>
                <input type="submit" name="B2" value="Next">
            </form>
<?php
        }
    }
    elseif(isset($_POST["B2"]))
    {
        require_once("../includes/Mylib.php");
            $sn=$_POST["p1"];
            $on=$_POST["p2"];
            $gst=$_POST["p3"];
            $ad=$_POST["p4"];
            $cn=$_POST["p5"];
            $email=$_POST["p6"];
        $sql="update sellerdata set seller='$sn', owner_name='$on', gst_no='$gst', address='$ad', contact='$cn' where email='$email'";
        mysqli_query($conn,$sql);
        $n=mysqli_affected_rows($conn);
        if($n==1)
        {
            $msg="Seller Data Edited";
            
        }
        else
        {
            $msg="Seller Data Not Edited";
        }
        echo $msg;
        echo "<h3><a href='showseller.php'>Show Sellers</a></h3>";
    
    }
    else
    {
        header("location:showseller.php");
        die();
    }
?>
<?php include("a2.php");?>
    