<?php include("g1.php"); ?>
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
<h1>Show Electronics</h1>
<?php
require_once("includes/Mylib.php");
$sql="select * from productdata where category='electronics'";
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
            if($i%4==0)
            {
                ?><div class="row">
                <?php
            } ?>
            <div class="col-md-4 col-sm-6 col-lg-3">
                <div class="card">
                    <a href="userReg.php"><img class="card-img img-thumbnail" src="seller/product_photos/<?php echo $pp;?>" style="max-width: 100%; max-height: 250px;"></a>
                    <div class="card-body card">
                        <h5 style="color: darkblue;"><?php echo $pn;?></h5>
                        <p>Company: <?php echo $co;?></p>
                        <p>Category: <?php echo $ca;?></p>
                        <h6 style="color: crimson;">Price: Rs.<?php echo $pr;?>/-</h6>
						<form action="userReg.php">
						<table><tr>
							<th><button class="btn-dark">Add To Basket</button></th>
						</tr></table></form>
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
<?php include("g2.php"); ?>