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
<table border="2px" cellspacing="0px" cellpadding="20px"><tr>
<th>Shop Name</th>
<th>Owner Name</th>
<th>GST No.</th>
<th>Email id</th>
<th>Phone No</th>
<th>Total No. of Items</th>
<th>Details</th>
</tr>
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
            $cn=$rw["contact"];
            $email=$rw["email"];
			
			//Query for counting products of particuler seller
			$sql1="select * from productdata where email='$email'";
			$result1=mysqli_query($conn,$sql1);
			$m=mysqli_num_rows($result1);
			
			
            ?><tr>
            <td><?php echo $sn;?></td>
            <td><?php echo $on;?></td>
            <td><?php echo $gst;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $cn;?></td>
            <td><?php echo $m; ?></td>
            <td><form method="post" action="sellerdetail.php">
            		<input type="hidden" name="t1" value="<?php echo $email;?>">
                <Button type="submit" name="B1" value="Click here">Click here</Button> 
            </form></td>
				</tr>
            <?php
        }
    } ?>
	</table>

<?php include("a2.php"); ?>