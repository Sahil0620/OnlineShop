<?php include("u1.php"); ?>
<h1>Furnitures</h1>
<style>
	.card
	{
		transition: all 0.3s;
	}
.card:hover
	{
		transform: scale(1.05);
	}
</style>
<?php
require_once("../includes/Mylib.php");
$sql="select * from productdata where category='furniture'";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
    $i=0;
    while($rw=mysqli_fetch_array($result))
    {
        
            $pid=$rw["product_id"];
            $pn=$rw["product_name"];
            $co=$rw["company"];
            $ca=$rw["category"];
            $ds=$rw["description"];
            $pr=$rw["price"];
            $pp=$rw["product_pic"];
			$em=$rw["email"];
            if($i%4==0)
            {
                ?><div class="row">
                <?php
            } ?>
            <div class="col-md-4 col-sm-6 col-lg-3">
                <div class="card">
                    <a href="userReg.php"><img class="card-img img-thumbnail" src="../seller/product_photos/<?php echo $pp;?>" style="max-width: 100%; max-height: 250px;"></a>
                    <div class="card-body card">
                        <h5 style="color: darkblue; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $pn;?></h5>
                        <p>Company: <?php echo $co;?></p>
                        <p>Category: <?php echo $ca;?></p>
                        <h6 style="color: crimson;">Price: Rs.<?php echo $pr;?>/-</h6>
						<form method="post" action="productpage.php">
							<input type="hidden" value="<?php echo $pn;?>" name="pn">
							<input type="hidden" value="<?php echo $em;?>" name="em">
							<input type="submit" value="More Details" name="B1">
						</form>
                    </div>
                </div>
            </div>
        <?php
        if($i%4==3)
        {
            ?></div>
            <?php
        }
        $i++;
    }
}
    ?>
<?php include("u2.php"); ?>