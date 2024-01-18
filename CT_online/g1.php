<style>
	h3{
		font-size: calc(20px + (35 - 20) * (100vw - 320px) / (1920 - 320));	
	}
	p{
		font-size: calc(13px + (25 - 20) * (100vw - 320px) / (1920 - 320));	
	}
	.nav-link
	{
		transition: all 0.2s;
	}
	.nav-link:hover
	{
		border-bottom: red thick;
	}
</style>
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
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="includes/css.css">
<script type="text/javascript" src="bootstrap/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(e){
        $("#bn1").click(function(){
            $("#callnav").slideToggle();
        });
        
        $("#n2").click(function(){
            $("#np").slideToggle();
        });
        
     });
</script>
</head>

<body>
    
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgba(33,33,33,1.00)">
    <a href="#" class="navbar-brand"><img src="includes/CRAZY THINGS 3.png" height="50px"></a>
    <button class="navbar-toggler" id="bn1">
        <span class="navbar-toggler-icon" style=""></span>
    </button>
    <div class="collapse navbar-collapse " id="callnav" >
        <ul class="navbar-nav text-center ml-auto" style="font-weight: bold; color: white;">
        
        <li class="nav-item"><form method="post" action="">
    <p style="font-weight: 600; font-size: 20px;"><input onKeyUp="find_med(this.value)" type="text" name="T1" style="background-color: black; color: white; width: 300px; border-radius: 10px; border: none;" placeholder="Search"/></p>
</form></li>
        
            <li class="nav-item"><a href="index.php" class="nav-link text-light" id="n1" >HOME</a></li>
            
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle text-light" id="n2" >Product</a>
                <ul class="dropdown-menu text-center" id="np" style="background-color: rgba(33,33,33,1.00); border: none; ">
                    <li><a class="dropdown-item text-light" href="furniture.php">Furnitures</a></li>
                    <li><a class="dropdown-item text-light" href="grocery.php">Grocery</a></li>
                    <li><a class="dropdown-item text-light" href="electronics.php">Electronics</a></li>
                    <li><a class="dropdown-item text-light" href="cosmatics.php">Cosmatics</a></li>
                    <li><a class="dropdown-item text-light" href="fashion.php">Fashion</a></li>
					<li><a class="dropdown-item text-light" href="books.php">Books</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="login/login.php" class="nav-link text-light">LOGIN</a></li>
        </ul>
    </div>
</nav>
    <div style=" background:url('ct photo/np9.jpg') ; background-size: 100%; background-repeat: no-repeat; background-color: rgba(214,214,214,1.00)">
<p style="background-color: rgba(33,33,33,1.00); height: 30px;margin-left: 5px; border-radius: 0 0 10px 10px; text-align: center; font-weight: bold; padding: 5px; line-height: 15px;color: white;" class="navbar-brand">GENERAL USER</p>
		
		<span id="s1"></span>
<div class="container-fluid " style="min-height: 500px; ">
    
