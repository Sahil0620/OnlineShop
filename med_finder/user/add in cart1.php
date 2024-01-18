 <?php 

session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$um=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="user")
{
	header("Location:../AuthError.php");
	die();
}
?><link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<nav class="navbar navbar-expand-md bg-info navbar-dark"> <a href="index.php" class="navbar-brand text- font-weight-bold" style="color:#FF0;font-size:24px; ">Med_Finder</a>

  <button class="navbar-toggler" id="bn"> 
  <span class="navbar-toggler-icon"></span>
   </button>
   
 <div class="collapse navbar-collapse " id="callnav">
    <ul class="navbar-nav text-center ml-auto" style="font-size:20px;font-weight:600;">
    <li class="navbar nav-item ml-auto"><form method="post" action="" style="background-color:#; text-decoration:none;list-style:none" ></li>
   <li class="nav-item"><form method="post" action="">
    <input onKeyUp="find_med(this.value)" type="text" name="T1" style="background-color:lightblue; color: white; width: 300px; border-radius: 10px; border: none;" placeholder="Search"/></li>
    
      <li class="nav-item"><a href="userpage.php" class="nav-link">HOME</a></li>
      <li class="nav-item"><a href="generalmedical.php" class="nav-link">MEDICALS</a></li>
       <li class="nav-item"><a href="../logout.php" class="nav-link">LOGOUT</a></li>
    </ul>
  </div>
</nav>
   <h2>Your Basket</h2>
<div class="row" style="background-color: azure;">
	
	<div class="col-md-8">
<?php
	$total=0;
    require_once("../includes/Mylib.php");
	$sql="select * from user_cart where user_email='$um'";
    $result=mysqli_query($conn,$sql);
	$n=mysqli_num_rows($result);
	if($n>0)
	{
		while($rw=mysqli_fetch_array($result))
		{
				$mn=$rw["med_name"];
				$pr=$rw["price"];
				$ph=$rw["photo"];
				$em=$rw["medical_email"];
			$mid=$rw["mid"];
		?>
	<table class="table">
			<tr>
				<th><img class="card-img img-thumbnail" src="../medical/photos/<?php echo $ph;?>" style="max-width:80%; max-height:150px;"></th>
				<th><?php echo $mn;?><br> Rs. <?php echo $pr;?>/-</th>
				<th>
                <form method="post" action="add in cart.php">
					<input type="hidden" name="mn" value="<?php echo $mn;?>">
					<input type="submit" class="btn-dark" name="D1" value="Remove">
				</form>
				<form method="post" action="add in cart.php">
					<input type="hidden" name="mid" value="<?php echo $mid;?>">
 					<input type="hidden" name="mn" value="<?php echo $mn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="um" value="<?php echo $um;?>">
					<input type="hidden" name="em" value="<?php echo $em;?>">
					<input type="submit" class="btn-info" name="S1" value="Save to Later">
				</form>
				
				<form method="post" action="cheackout.php">
					<input type="hidden" name="mid" value="<?php echo $mid;?>">
					<input type="hidden" name="ph" value="<?php echo $ph;?>">
					<input type="hidden" name="mn" value="<?php echo $mn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="um" value="<?php echo $um;?>">
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
			<form method="post" action="cheackout.php">
            <input type="hidden" name="mid" value="<?php echo $mid;?>">
					<input type="hidden" name="ph" value="<?php echo $ph;?>">
					<input type="hidden" name="mn" value="<?php echo $mn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="um" value="<?php echo $um;?>">
					<input type="hidden" name="em" value="<?php echo $em;?>">
				<input type="hidden" name="total" value="<?php echo $total;?>">
				<input type="submit" class="btn-danger" name="B1" value="Buy Now">
			</form>
		</div>
	</div>
</div>
<!--save for later-->
<div class="row">
	<div class="col-md-auto">
		<?php
		require_once("../includes/Mylib.php");
	$sql1="select * from P_data where user_email='$um'";
    $result1=mysqli_query($conn,$sql1);
	$n1=mysqli_num_rows($result1);
	if($n1>0)
	{
		while($rw1=mysqli_fetch_array($result1))
		{
				$mn=$rw1["Med_name"];
				$pr=$rw1["price"];
				$ph=$rw1["product_pic"];
				$em=$rw1["medcial_email"];
			$mid=$rw1["mid"];
		?>
		<h3>Save for later</h3>
	<table class="table">
			<tr>
				<th><img class="card-img img-thumbnail" src="../medical/photos/<?php echo $ph;?>" style="max-width: 300%; max-height:100px;"></th>
				<th><?php echo $mn;?><br> Rs.<?php echo $pr;?>/-</th>
				<th><form method="post" action="add in cart.php">
					<input type="hidden" name="mn" value="<?php echo $mn;?>">
					<input type="submit" class="btn-dark" name="D2" value="Remove">
				</form>
				<form method="post" action="add in cart.php">
					<input type="hidden" name="mid" value="<?php echo $mid;?>">
					<input type="hidden" name="ph" value="<?php echo $ph;?>">
					<input type="hidden" name="mn" value="<?php echo $mn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="um" value="<?php echo $um;?>">
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

 