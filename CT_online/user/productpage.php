<?php 

session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$e1=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="user")
{
	header("Location:../AuthError.php");
	die();
}
?>

<?php include("u1.php");?>


<script src="zoomsl.js" type="text/javascript"></script>
<script type="text/javascript">
	$(Document).ready(function(){
		$(".main_img").imagezoomsl({
			zoomrange: [3, 3]
		});
	});
</script>

<?php
require_once("../includes/Mylib.php");

if(isset($_POST["B1"]))
{
	$pn=$_POST["pn"];
	$ema=$_POST["em"];
	$sql="select * from productdata where product_name='$pn'";
	$result=mysqli_query($conn,$sql);
	$n=mysqli_num_rows($result);
	if($n>0)
	{
		$rw=mysqli_fetch_array($result);
		
				$pid=$rw["product_id"];
				$co=$rw["company"];
				$ca=$rw["category"];
				$ds=$rw["description"];
				$pr=$rw["price"];
				$pp=$rw["product_pic"];
				$em=$rw["email"];
		
	}

?>

 <div class="row">
<div class="col-md-7" align="center">
	<img class="card-img img-thumbnail main_img" src="../seller/product_photos/<?php echo $pp;?>" style="max-width: 80%; max-height: auto;" data-magnify-src="../seller/product_photos/<?php echo $pp;?>">
	 
	 </div>
<div class="col-md-5">
	 <h3 style="color: darkblue;"><?php echo $pn;?></h3><br>
                        <h6>Company: <?php echo $co;?></h6><br>
                        <h6>Category: <?php echo $ca;?></h6><br>
						<h6>Description: <?php echo $ds;?></h6><br>
                        <h4 style="color: crimson; font-weight: 600;">Price: Rs. <?php echo $pr;?>/-</h4><br>
	<div align="center">
			<form method="post" action="addtoatc.php">
					<input type="hidden" name="pid" value="<?php echo $pid;?>">
					<input type="hidden" name="pp" value="<?php echo $pp;?>">
					<input type="hidden" name="pn" value="<?php echo $pn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="ue" value="<?php echo $e1;?>">
					<input type="hidden" name="em" value="<?php echo $em;?>">
					<input type="submit" class="btn-warning" name="B2" value="Add To Basket" style="height: 40px; width: 250px; border-radius: 40px;"></form>
	<br>
				<form method="post" action="checkout.php">
					<input type="hidden" name="pid" value="<?php echo $pid;?>">
					<input type="hidden" name="pp" value="<?php echo $pp;?>">
					<input type="hidden" name="pn" value="<?php echo $pn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="ue" value="<?php echo $e1;?>">
					<input type="hidden" name="em" value="<?php echo $em;?>">
					<input type="submit" class="btn-danger" name="B3" value="Buy Now" style="height: 40px; width: 250px; border-radius: 40px;"></form></th>
			
			</div>
	
	
	 </div>
</div>
<hr>
<div class="row">
 	<div class="col-md-6" align="center" style="color: yellow; text-shadow: 0 0 15px blue;">
		<?php
		$sql1="select * from sellerdata where email='$em'";
		$result1=mysqli_query($conn,$sql1);
		$n1=mysqli_num_rows($result1);
		
	if($n1>0)
	{
		$rw1=mysqli_fetch_array($result1);
		
			$sn1=$rw1["seller"];
            $on1=$rw1["owner_name"];
            $gst1=$rw1["gst_no"];
            $ad1=$rw1["address"];
            $cn1=$rw1["contact"];
            ?>
		<h3>Seller Details: </h3>
            <h3> <?php echo $sn1;?> </h3>
            <p>Address:- <?php echo $ad1;?></p>
		
		<?php
	}
		?>
	</div>
 	<div class="col-md-6"></div>
</div>

<?php
}
	
?>

<?php include("u2.php");?>
