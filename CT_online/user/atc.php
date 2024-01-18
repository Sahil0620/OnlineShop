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
<h2>Your Basket</h2>
<div class="row" style="background-color: azure;">
	
	<div class="col-md-8">
<?php
	$total=0;
    require_once("../includes/Mylib.php");
	$sql="select * from atcdata where user_email='$e1'";
    $result=mysqli_query($conn,$sql);
	$n=mysqli_num_rows($result);
	if($n>0)
	{
		while($rw=mysqli_fetch_array($result))
		{
				$pn=$rw["product_name"];
				$pr=$rw["price"];
				$pp=$rw["product_pic"];
				$em=$rw["seller_email"];
			$pid=$rw["pid"];
		?>
	<table class="table">
			<tr>
				<th><img class="card-img img-thumbnail" src="../seller/product_photos/<?php echo $pp;?>" style="max-width: 30%; max-height: 100px;"></th>
				<th><?php echo $pn;?><br> Rs. <?php echo $pr;?>/-</th>
				<th><form method="post" action="addtoatc.php">
					<input type="hidden" name="pn" value="<?php echo $pn;?>">
					<input type="submit" class="btn-dark" name="D1" value="Remove">
				</form>
				<form method="post" action="addtoatc.php">
					<input type="hidden" name="pid" value="<?php echo $pid;?>">
					<input type="hidden" name="pp" value="<?php echo $pp;?>">
					<input type="hidden" name="pn" value="<?php echo $pn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="ue" value="<?php echo $e1;?>">
					<input type="hidden" name="em" value="<?php echo $em;?>">
					<input type="submit" class="btn-info" name="S1" value="Save to Later">
				</form>
				
				<form method="post" action="checkout.php">
					<input type="hidden" name="pid" value="<?php echo $pid;?>">
					<input type="hidden" name="pp" value="<?php echo $pp;?>">
					<input type="hidden" name="pn" value="<?php echo $pn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="ue" value="<?php echo $e1;?>">
					<input type="hidden" name="em" value="<?php echo $em;?>">
					<input type="submit" class="btn-danger" name="B1" value="Buy Now">
				</form></th>
			</tr>
		</table>
<?php	
			$total=$total+$pr;
		}
	}

?>
	</div>
	<div class="col-md-4">
		<div class="card">
			<h2>Total Amount: Rs.<?php echo $total;?> /-</h2>
			<!--<form method="post" action="">
				<input type="hidden" name="total" value="<?php echo $total;?>">
				<input type="submit" class="btn-danger" name="B1" value="Buy Now">
			</form>-->
		</div>
	</div>
</div>
<!--save for later-->
<div class="row">
	<div class="col-md-auto">
		<?php
		require_once("../includes/Mylib.php");
	$sql1="select * from sfldata where user_email='$e1'";
    $result1=mysqli_query($conn,$sql1);
	$n1=mysqli_num_rows($result1);
	if($n1>0)
	{
		while($rw1=mysqli_fetch_array($result1))
		{
				$pn=$rw1["product_name"];
				$pr=$rw1["price"];
				$pp=$rw1["product_pic"];
				$em=$rw1["seller_email"];
			$pid=$rw1["pid"];
		?>
		<h3>Save for later</h3>
	<table class="table">
			<tr>
				<th><img class="card-img img-thumbnail" src="../seller/product_photos/<?php echo $pp;?>" style="max-width: 30%; max-height: 100px;"></th>
				<th><?php echo $pn;?><br> Rs. <?php echo $pr;?>/-</th>
				<th><form method="post" action="addtoatc.php">
					<input type="hidden" name="pn" value="<?php echo $pn;?>">
					<input type="submit" class="btn-dark" name="D2" value="Remove">
				</form>
				<form method="post" action="addtoatc.php">
					<input type="hidden" name="pid" value="<?php echo $pid;?>">
					<input type="hidden" name="pp" value="<?php echo $pp;?>">
					<input type="hidden" name="pn" value="<?php echo $pn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="ue" value="<?php echo $e1;?>">
					<input type="hidden" name="em" value="<?php echo $em;?>">
					<input type="submit" class="btn-info" name="S2" value="Add to Cart">
				</form></th>
			</tr>
		</table>
<?php	
		}
	}

?>
	</div>
</div>

<?php include("u2.php");?>