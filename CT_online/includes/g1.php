<!DOCTYPE html>
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
<script>
         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
		 $("#n2").click(function(){
            $("#np").slideToggle();
        });
        
      </script>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
	   
	   <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="includes/css.css">
<script type="text/javascript" src="bootstrap/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	   
	   
      <link rel="stylesheet" href="navbar_style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <nav>
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <div class="logo">
            <a href="#" class="navbar-brand"><img src="includes/CRAZY THINGS 3.png" height="50px"></a>
         </div>
         <div class="nav-items">
            <li class="nav-item"><a href="index.php" class="nav-link" id="n1">HOME</a></li>
            
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="n2" >Product</a>
                <ul class="dropdown-menu text-center" id="np" style="background-color: rgba(33,33,33,1.00); border: none; ">
                    <li><a class="dropdown-item  " href="furniture.php">Furnitures</a></li>
                    <li><a class="dropdown-item  " href="grocery.php">Grocery</a></li>
                    <li><a class="dropdown-item  " href="electronics.php">Electronics</a></li>
                    <li><a class="dropdown-item  " href="cosmatics.php">Cosmatics</a></li>
                    <li><a class="dropdown-item  " href="fashion.php">Fashion</a></li>
					<li><a class="dropdown-item  " href="books.php">Books</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="login/login.php" class="nav-link" style="color: white;">LOGIN</a></li>
         </div>
         <div class="search-icon">
            <span class="fas fa-search"></span>
         </div>
         <div class="cancel-icon">
            <span class="fas fa-times"></span>
         </div>
         <form action="" method="post">
            <input type="search" class="search-data" placeholder="Search" onKeyUp="find_med(this.value)" required>
            <button type="submit" class="fas fa-search"></button>
         </form>
      </nav>
      
      <script>
         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
		 $("#n2").click(function(){
            $("#np").slideToggle();
        });
        
      </script>
   <span id="s1"></span>
<div class="container-fluid " style="min-height: 500px; ">