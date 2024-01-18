 
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<nav class="navbar navbar-expand-md bg-info navbar-dark"> <a href="index.php" class="navbar-brand text- font-weight-bold" style="color:#FF0;font-size:24px; ">Med_Finder</a>

  <button class="navbar-toggler" id="bn"> 
  <span class="navbar-toggler-icon"></span>
   </button>
   
 <div class="collapse navbar-collapse " id="callnav">
    <ul class="navbar-nav text-center ml-auto" style="font-size:20px;font-weight:600;">
    <li class="navbar nav-item ml-auto">
   <li class="nav-item">
     
    
      <li class="nav-item"><a href="userpage.php" class="nav-link">HOME</a></li>
      <li class="nav-item"><a href="add in cart1.php" class="nav-link">CART</a></li>
       <li class="nav-item"><a href="../logout.php" class="nav-link">LOGOUT</a></li>
    </ul>
  </div>
</nav
  
 ><?php 

session_start();
if(!isset($_SESSION["email"]))
{
	header("AuthError.php");
	die();
}
$um=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="user")
{
	header("AuthError.php");
	die();
}
?>
 

	<?php	
		$ph=$_POST["ph"];
    	$mn=$_POST["mn"];
    	$pr=$_POST["pr"];
    	$um=$um;
    	$em=$_POST["em"];
		$mid=$_POST["mid"];	
?><h1>user details</h1>

<?php 
 /*?>if(isset($_POST["pay"]))
{
	$_SESSION["fn"]=$_POST["fn"];
	$_SESSION["ln"]=$_POST["ln"];
	$_SESSION["cn"]=$_POST["cn"];
	$_SESSION["adr"]=$_POST["adr"];
	$_SESSION["pin"]=$_POST["pin"];
	$_SESSION["cit"]=$_POST["cit"];
	$_SESSION["st"]=$_POST["st"];
	$_SESSION["pid"]=$_POST["pid"];
	$_SESSION["ue"]=$_POST["ue"];
	$_SESSION["em"]=$_POST["em"];
	$_SESSION["pr"]=$_POST["pr"];
	header("location:pay.php");
}<?php */?>
<div class="card bg-info align-items-center col-form-label-lg">
<form method="post" action="pay.php" style="text-align:center">
	<p>First Name <input type="text" name="fn"></p>
	<p>Last Name <input type="text" name="ln"></p>
	<p>Contact <input type="text" name="cn"></p>
	<p>Address <input type="text" name="adr"></p>
	<p>Pincode <input type="text" name="pin"></p>
	<p>City <input type="text" name="cit"></p>
	<p>State <input type="text" name="st"></p>
	<p>Email <input type="text" name="um" value="<?php echo $um;?>" readonly></p>
	
	<input type="hidden" name="mid" value="<?php echo $mid;?>">
	<input type="hidden" name="ph" value="<?php echo $ph;?>">
	<input type="hidden" name="mn" value="<?php echo $mn;?>">
	<input type="hidden" name="pr" value="<?php echo $pr;?>">
	<input type="hidden" name="em" value="<?php echo $em;?>">
	
	<input type="submit" class="btn-light" value="CheckOut" name="pay">
</form>
</div>


 