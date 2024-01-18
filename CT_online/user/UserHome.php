
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

<div id="demo" class="carousel slide" data-ride="carousel" align="center">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
    <li data-target="#demo" data-slide-to="7"></li>
    <li data-target="#demo" data-slide-to="8"></li>

 
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
	  <div class="carousel-item active">
      <img class="img-fluid" src="../ct photo/b13.gif" alt="New York" width="1200" height="500">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="../ct photo/iphone-14-check-out-new-features-colours-of-apples-upcoming-phone.jpg" alt="Los Angeles" width="1200" height="500">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="../ct photo/b11.webp" alt="Chicago" width="1200" height="500">
    </div>
     <div class="carousel-item">
      <img class="img-fluid" src="../ct photo/b3.webp" alt="New York" width="1200" height="500">
    </div>
     <div class="carousel-item">
      <img class="img-fluid" src="../ct photo/b5.jpg" alt="New York" width="1200" height="500">
    </div>
     <div class="carousel-item">
      <img class="img-fluid" src="../ct photo/b6.jfif" alt="New York" width="1200" height="500">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="../ct photo/b8.jpg" alt="New York" width="1200" height="500">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="../ct photo/b9.jpg" alt="New York" width="1200" height="500">
    </div>
    
    <div class="carousel-item">
      <img class="img-fluid" src="../ct photo/b12.webp" alt="New York" width="1200" height="500">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="../ct photo/b13.gif" alt="New York" width="1200" height="500">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  </div>


<div class="row" style="margin-top: 50px;">
	<div class="col-md-4 card">
		<a href="furniture.php"><img class="card-img" src="homepage/f1.gif" style="max-height: 400px; min-width: 100%;"></a>
		<h3>Furniture</h3>
	</div>
	<div class="col-md-4 card">
		<a href="fashion.php"><img class="card-img" src="homepage/fa2.gif" style="max-height: 400px; min-width: 100%;"></a>
		<h3>Fashion</h3>
	</div>
	<div class="col-md-4 card">
		<a href="cosmatics.php"><img class="card-img" src="homepage/c1.gif" style="max-height: 400px; min-width: 100%;"></a>
		<h3>Cosmatic</h3>
	</div>
</div>

<div class="row">
	<div class="col-md-4 card">
		<a href="electronics.php"><img class="card-img" src="homepage/e1.gif" style="max-height: 400px; min-width: 100%;"></a>
		<h3>Electronics</h3>
	</div>
	<div class="col-md-4 card">
		<a href="grocery.php"><img class="card-img" src="homepage/g1.gif" style="max-height: 400px; min-width: 100%;"></a>
		<h3>Grocery</h3>
	</div>
	<div class="col-md-4 card">
		<a href="books.php"><img class="card-img" src="homepage/b1.gif" style="max-height: 400px; min-width: 100%;"></a>
		<h3>Books</h3>
	</div>
	
</div>

<?php include("u2.php");?>
