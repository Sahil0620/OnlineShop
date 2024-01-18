<script type="text/javascript">
function find_med(str)
{
	var xmlhttp;
	if (str.length==0)
  	{ 
  		document.getElementById("s1").innerHTML="";
  		return;
  	}
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
    				document.getElementById("s1").innerHTML=xmlhttp.responseText;
    		}
  	}
	xmlhttp.open("GET","product_search.php?q="+str,true);
	xmlhttp.send();
}
</script>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../includes/css.css">
<script type="text/javascript" src="../bootstrap/jquery.js"></script>
<script>
    $(document).ready(function(e){
        $("#bn1").click(function(){
            $("#callnav").slideToggle();
        });
        
        $("#n2").click(function(){
            $("#npr").hide();
			$("#np").hide();
            $("#ns").slideToggle();
        });
        $("#n3").click(function(){
            $("#ns").hide();
			$("#npr").hide();
            $("#np").slideToggle();
        });
		$("#n4").click(function(){
            $("#ns").hide();
			$("#np").hide();
            $("#npr").slideToggle();
        });
        
     });
</script>
	<style>
		.nav-link
		{
			color: white;
		}
		.nav-link:hover
		{
			color: red;
		}
	</style>
</head>

<body>
    
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgba(33,33,33,1.00)">
    <a href="#" class="navbar-brand"><img src="../includes/CRAZY THINGS 3.png" height="50px"></a>
    <button class="navbar-toggler" id="bn1">
        <span class="navbar-toggler-icon" style=""></span>
    </button>
    <div class="collapse navbar-collapse" id="callnav">
        <ul class="navbar-nav text-center" style="font-weight: bold;">
            <li class="nav-item"><a href="UserHome.php" class="nav-link text-light">HOME</a></li>
                
            <li class="nav-item"><a href="atc.php" class="nav-link text-light" >Your Products</a></li>
            
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle text-light" id="n3" >Profile</a>
                <ul class="dropdown-menu text-center dropdown-menu-right" id="np" style="background-color: rgba(33,33,33,1.00); border: none;">
                    <li><a class="dropdown-item text-light" href="showuser.php">Edit Profile</a></li>
                    <li><a class="dropdown-item text-light" href="#">Change Password</a></li>
                    <li><a class="dropdown-item text-light" href="../logout.php">Logout</a></li>
                </ul>
            </li>
			<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle text-light" id="n4" >Products</a>
                <ul class="dropdown-menu text-center dropdown-menu-right" id="npr" style="background-color: rgba(33,33,33,1.00); border: none;">
                    <li><a class="dropdown-item text-light" href="furniture.php">Furniture</a></li>
                    <li><a class="dropdown-item text-light" href="fashion.php">Fashion</a></li>
                    <li><a class="dropdown-item text-light" href="grocery.php">Grocery</a></li>
					<li><a class="dropdown-item text-light" href="cosmatics.php">Cosmatics</a></li>
					<li><a class="dropdown-item text-light" href="electronics.php">Electronics</a></li>
					<li><a class="dropdown-item text-light" href="books.php">Books</a></li>
                </ul>
            </li>
        </ul>
        <form class="nav-item ml-auto form-check-inline" action="product_search.php" method="post">
            <input type="text" name="s1">
            <input type="submit" name="B1" value="search">
        </form>
    </div>
</nav>
<div style=" background: url('../ct photo/np6.jpg'); background-size: 100%; background-repeat: no-repeat; background-color: rgba(214,214,214,1.00);">
    <p style="background: rgba(33,33,33,1.00); height: 30px;margin-left: 5px; border-radius: 0 0 10px 10px; text-align: center; font-weight: bold; padding: 5px; line-height: 15px;color: white;" class="navbar-brand">USER</p>
	<span id="s1"></span>
    	<div class="container-fluid" style="min-height: 500px; ">
 