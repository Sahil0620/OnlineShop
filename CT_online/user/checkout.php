


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
      <li class="nav-item"><a href="add in cart1.php" class="nav-link">CART</a></li>
       <li class="nav-item"><a href="../logout.php" class="nav-link">LOGOUT</a></li>
    </ul>
  </div>
</nav>

<?php 

session_start();
if(!isset($_SESSION["email"]))
{
	header("AuthError.php");
	die();
}
$e1=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="user")
{
	header("AuthError.php");
	die();
}
?>
<?php include("u1.php");?>


	<?php	
		$pp=$_POST["pp"];
    	$pn=$_POST["pn"];
    	$pr=$_POST["pr"];
    	$ue=$e1;
    	$em=$_POST["em"];
		$pid=$_POST["pid"];	
?>
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


<form method="post" action="pay.php">
	<p>First Name <input type="text" name="fn"></p>
	<p>Last Name <input type="text" name="ln"></p>
	<p>Contact <input type="text" name="cn"></p>
	<p>Address <input type="text" name="adr"></p>
	<p>Pincode <input type="text" name="pin"></p>
	<p>City <input type="text" name="cit"></p>
	<p>State <input type="text" name="st"></p>
	<p>Email <input type="text" name="ue" value="<?php echo $ue;?>" readonly></p>
	
	<input type="hidden" name="pid" value="<?php echo $pid;?>">
	<input type="hidden" name="pp" value="<?php echo $pp;?>">
	<input type="hidden" name="pn" value="<?php echo $pn;?>">
	<input type="hidden" name="pr" value="<?php echo $pr;?>">
	<input type="hidden" name="em" value="<?php echo $em;?>">
	
	<input type="submit" value="CheckOut" name="pay">
</form>


<?php include("u2.php");?>
