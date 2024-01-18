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

  <?php include("a1.php"); ?>
  
<div class="row">
	<div class="col-md-1">
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-3"></div>
 
	</div>
		</div>
	<div class="col-md-3"></div>

	</div>
	<div class="col-md-1"></div>	
</div>

<?php include("a2.php");?>
