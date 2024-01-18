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
<style>
    .in
    {
        width: 250px;
        border-radius: 10px;
        float: right;
        margin-right: 10px;
    }
    p
    {
        font-family: "Arial"; 
        margin-left: 10px;
    }
</style>
<?php include("s1.php"); ?>
<div class="form-control-plaintext" style="height: auto; width: 450px; border: thick; border-radius: 20px; border-color: black; box-shadow: 0 0 20px black;  margin-right: 40px; background-color:#C5F4F4; float:right;" >
<h1 style="color:#25578A;text-align: center;">Product Registration</h1>
    <hr style="border:solid; border-color: lightpink;">
<form method="post" action="productReg1.php" enctype="multipart/form-data">  
    <p>Product Name:-<input type="text" name="s1" class="in"></p>
    <p>Company:-<input type="text" name="s2" class="in"></p>
    <p>Product Category:-<select name="s3" class="in" style="text-align: center;">
        <option>Electronics</option>
        <option>Grocery</option>
        <option>Furniture</option>
        <option>Fashion</option>
        <option>Cosmatic</option>
		<option>Books</option>
        </select></p>
    <p>Descripition:-<input type="text" name="s4" class="in"></p>
    <p>Price:-<input type="text" name="s5" class="in"></p>
    <p>Upload Photo:-  <input type="file" name="F1" class="in">
    </p>
      <button type="submit" name="B1" class="btn-danger" style="margin-left: 150px; border-radius: 10px;  width:150px;  color: aliceblue; ">Add Products</button>
    

</form>
</div>
      <?php include("s2.php"); ?>