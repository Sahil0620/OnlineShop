<?php 

session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$e1=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="user")
{
	header("Location:../AuthError.php");
	die();
}
?>

<?php include("u1.php");?>

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


<?php include("u2.php");?>
