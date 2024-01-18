<?php include("a1.php"); ?>

 

 <style>
 
* {box-sizing:border-box;
 
      }

/* Slideshow container */
 

 

 /* On hover, add a black background color with a little bit see-through */


 .adv{background-color:#3C9;float:right;width:520px;height:200px;
 }
.card{ padding-top:20px; 
     margin:10px 10px;
	 		   border-radius:20px;
			   box-sizing:border-box;}
 
 
 .card:hover{
           opacity:1;
 		   transition:all .3sec ease-in-out;
		   border: solid 0px;
		   box-shadow:5px 5px 5px ;
		   }
		   
 
 .product{background-color:#999;
           width:1200px;
		   height:200px;
		   margin:10px 20px;
		   border:#000 solid 1px;	
		
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
	xmlhttp.open("GET","search_med.php?q="+str,true);
	xmlhttp.send();
}


</script>
 <nav class="card bg-warning">
<h2 style="color: darkcyan; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; font-weight:;display:inline;position:absolute; list-style:none">Search Medicine</h2>

<li class="navbar nav-item ml-auto"><form method="post" action="" style="background-color:#; text-decoration:none;list-style:none" >
     <li class="nav-item"><form method="post" action="">
    <p style="font-weight:600; font-size:20px;">medicine name:-<input onKeyUp="find_med(this.value)" type="text" name="T1" style="background-color:lightblue; color: white; width: 300px; border-radius: 10px; border: none;" placeholder="Search"/></p>
    <a href=""><h1 style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:20px;float:;margin-top:;color:#F00;font-weight:bold;">QUICK BUY! Get 15% off on medicines</h1></a>
    </form></li>


 </nav>
<span id="s1"></span>



   
  
   <div class="carousel">
  
 <div id="demo" class="carousel slide" data-ride="carousel" align="center">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
  
 
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
	  <div class="carousel-item active">
      <img class="img-fluid" src="medical/photos/slide1.png" alt="New York" width="600" height="100">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="medical/photos/slider1.png" alt="Los Angele" width="900" height="100" style="width:500px;">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="medical/photos/hhh.webp" width="900" height="200" style="width:500px;">
    </div>
     <div class="carousel-item">
      <img class="img-fluid" src="medical/photos/diss.jpg" alt="New York" width="900" height="200">
    </div>
     <div class="carousel-item ">
      <img class="img-fluid" src="medical/photos/l0gin.jpg" alt="New York" width="900" height="200">
    </div>
     <div class="carousel-item">
      <img class="img-fluid" src="medical/photos/krish@gmail.com-adv.jpg" alt="New York" width="900" height="200">
    </div>
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
  
     <div class="nav card" >
     <div></div>
     <div class="figure-img">
    <img class="card-img" src="medical/photos/krish@gmail.com-adv.jpg" width="520px" height="200px" style="background-repeat:no-repeat;background-size:cover;"/>
     </div>
     </div>
            
  
 <?php 	
    require_once("includes/Mylib.php");
	$sql="select * from medicines";
     $result=mysqli_query($conn,$sql);
       $n=mysqli_num_rows($result);
	   if($n>0)
	   {
	   ?>
	   <table width="100%">
	   <?php
   
    $i=0;
    while($rw=mysqli_fetch_array($result))
    {
        if($i%4==0)         

        {
                ?><tr><?php

        }
             $id=$rw["med_id"];		
             $mn=$rw["med_name"];
            $ow=$rw["company"];
            $ln=$rw["description"];
            $cont=$rw["price"];
			$ph=$rw["photo"];
              ?>

             <td width="20%">

             <div class="card" style="text-align:center;border-radius:20px;">
             <div class="col-md-12">
             <p class="pi"><img src="medical/photos/<?php echo $ph;?>"width="210px" height="80px" ></p>

              <h6  style="color:darkmagenta;"><?php echo $mn;?></h6>
            <p class="pi">company: <?php echo $ow;?></p>
            <p class="pi" >description: <?php echo $ln;?></p>
            <p class="pi">price: <?php echo $cont;?></p>    

             <form method="post" action="New folder/index.php" >
            <input type="hidden" name="H1" value="<?php echo $id;?>">

          <a href="buy.php"> <button type="submit" value="BUY" class="btn-danger" style="width:150px; margin-bottom:10px"></a>BUY</button></form>

          
                       <form action="userent.php">
					
							<button class="btn-warning" style="margin-bottom:10px">Add To Basket</button>
						</form>

            </div>
             </div></td>

 <?php
        if($i%4==4)
        {
            ?></tr><?php 
        }
        $i++;
    }?></table></body>
<?php
} 
?>

            
 <?php include("a2.php"); ?>
 