<?php include("u1.php"); ?>


<h1>Search Product</h1>
<?php /*?><form method="post" action="">
    <p>Medicine Name <input value="<?php if(isset($_POST["T1"])) echo $_POST["T1"];?>" type="text" name="T1" />
        <input type="submit" name="B1" value="Search" />
    </p>
</form><?php */?>
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
if(isset($_POST["B1"]))
{
    require_once("../includes/Mylib.php");
    $pname=$_POST["s1"];
    $sql="select * from productdata where product_name LIKE '%$pname%'";
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
            <div class="col-3">
                <div class="card">
                    <img class="card-img" src="../seller/product_photos/<?php echo $pp;?>" height="300px">
                    <div class="card-body">
                        <h3><?php echo $pn;?></h3>
                        <p>Company: <?php echo $co;?></p>
                        <p>Category: <?php echo $ca;?></p>
                        <p>description: <?php echo $ds;?></p>
                        <p>price: Rs.<?php echo $pr;?>/-</p>
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
    else
    {
        echo "<h3>No product found</h3>";
    }
}
?>
<?php include("u2.php"); ?>