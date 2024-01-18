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
if($u!="seller")
{
	header("Location:../AuthError.php");
	die();
}
?>

<?php include("s1.php"); ?>
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
<h3>Show Product</h3>
<?php
require_once("../includes/Mylib.php");
$sql="select * from productdata where email='$e1'";
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
            <div class="col-3">
                <div class="card">
                    <img class="card-img" src="product_photos/<?php echo $pp;?>" height="300px">
                    <div class="card-body">
                        <h3><?php echo $pn;?></h3>
                        <p>Company: <?php echo $co;?></p>
                        <p>Category: <?php echo $ca;?></p>
                        <p style="overflow: auto; height:50px;">description: <?php echo $ds;?></p>
                        <p>price: Rs.<?php echo $pr;?>/-</p>
                         <table>
                         <tr>
                         <td><form method="post" action="editproduct.php">
                       <input type="hidden" name="H1" value="<?php echo $pid;?>">
                            <input type="submit" name="B1" value="Edit">
                        </form></td>
                        <td>
                        <form method="post" action="deleteproduct.php">
                        <input type="hidden" name="H1" value="<?php echo $pid;?>">
                            <input type="submit" name="B1" value="Delete">
                        </form></td></tr></table>
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
    ?>
<h3>No Product Found</h3>
<h3><a href="productReg.php">Add Product First</a></h3>
<?php
}
?>

<?php include("s2.php"); ?>