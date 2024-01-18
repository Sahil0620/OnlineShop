<?php
    session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:../AuthError.php");
        die();
    }
$e1=$_SESSION["email"];
$ut=$_SESSION["usertype"];
if($ut!="seller")
{
    header("location:../AuthError.php");
    die();
}
?>
<?php include("s1.php");?>
<h1>Edit Products</h1>
<?php
if(isset($_POST["B1"]))
{
    $pid=$_POST["H1"];
    require_once("../includes/Mylib.php");
    $sql="select * from productdata where product_id='$pid'";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    if($n>0)
    {

        $rw=mysqli_fetch_array($result);


                $pn=$rw["product_name"];
                $co=$rw["company"];
                $ca=$rw["category"];
                $ds=$rw["description"];
                $pr=$rw["price"];
                $pp=$rw["product_pic"];
            ?>
                <form method="post" action="" enctype="multipart/form-data">  
                    <p>Product Name:-<input type="text" name="s1" value="<?php echo $pn;?>"></p>
                    <p>Company:-<input type="text" name="s2" value="<?php echo $co;?>"></p>
                    <p>Product Category:-<select name="s3" value="<?php echo $ca;?>">
                        <option>Electronics</option>
                        <option>Grocery</option>
                        <option>Furniture</option>
                        <option>Fashion</option>
                        <option>Cosmetic</option>
						<option>Books</option>
                        </select></p>
                    <p>Descripition:-<input type="text" name="s4" value="<?php echo $ds;?>"></p>
                    <p>Price:-<input type="text" name="s5" value="<?php echo $pr;?>"></p> 
                    <input type="hidden" name="s6" value="<?php echo $pid;?>">
                      <input type="submit" name="B2" value="edit product">
                </form>

    <?php
    }
}
if(isset($_POST["B2"]))
{
    $pn=$_POST["s1"];
    $co=$_POST["s2"];
    $pc=$_POST["s3"];
    $ds=$_POST["s4"];
    $pr=$_POST["s5"];
    $pid=$_POST["s6"];
    require_once("../includes/Mylib.php");
    $sql="update productdata set product_name='$pn',company='$co',category='$pc',description='$ds',price='$pr' where product_id='$pid'";
    mysqli_query($conn,$sql);
    $n=mysqli_affected_rows($conn);
    
    if($n==1)
            {
                $msg="Edited Product is Saved Successfully";
            }
            else
            {
                $msg="Edited Product is not Saved ";
            }
            ?>
            <h3><?php echo $msg;?></h3>
            <h3><a href="showproduct.php">Show Product Data</a></h3>
<?php
}
/*else
{
    header("location:showproduct.php");
    die();
}*/
?>
<?php include("s2.php");?>