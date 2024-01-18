 

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
 <script>
 $(document).ready(function(e){
        $("#bn").click(function(){
            $("#callnav").slideToggle();
        });
          
     });
</script>
 <?php
    session_start();
    if(!isset($_SESSION["email"]))
    {
        header("AuthError.php");
        die();
    }
$um=$_SESSION["email"];
$ut=$_SESSION["usertype"];
if($ut!="user")
{
    header("AuthError.php");
    die();
}
?>
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
    <li class="navbar nav-item ml-auto"><form method="post" action="" style="background-color:#; text-decoration:none;list-style:none" ></li>
   <li class="nav-item"><form method="post" action="">
    <input onKeyUp="find_med(this.value)" type="text" name="T1" style="background-color:lightblue; color: black; width: 300px; border-radius: 10px; border: none;" placeholder="Search"/></form></li>
    
      <li class="nav-item"><a href="userpage.php" class="nav-link">HOME</a></li>
      <li class="nav-item"><a href="add in cart1.php" class="nav-link">CART</a></li>
       <li class="nav-item"><a href="../logout.php" class="nav-link">LOGOUT</a></li>
    </ul>
  </div>
</nav>
<span id="s1"></span>

 <h1> user page</h1>


  <?php 	
 require_once("../includes/Mylib.php");
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
        if($i%3==0)         

        {
                ?><tr><?php

        }
             $id=$rw["med_id"];		
             $mn=$rw["med_name"];
            $ow=$rw["company"];
            $ln=$rw["description"];
            $pr=$rw["price"];
			$ph=$rw["photo"];
              ?>

             <td width="25%">

             <div class="card" style="text-align:center;border-radius:20px;">
             <p class="pi"><img src="../medical/photos/<?php echo $ph;?>"width="210px" height="150px" ></p>

              <h6  style="color:darkmagenta;"><?php echo $mn;?></h6>
            <p class="pi">company: <?php echo $ow;?></p>
            <p class="pi" >description: <?php echo $ln;?></p>
            <p class="pi">price: <?php echo $pr;?></p>    

             <form method="post" action="../buy.php" >
            <input type="hidden" name="H1" value="<?php echo $id;?>">

          <a href="../buy.php"> <input type="submit" value="BUY" ></a></form>

          
                  <form method="post" action="add in cart.php">
					<input type="hidden" name="mid" value="<?php echo $mid;?>">
					<input type="hidden" name="ph" value="<?php echo $ph;?>">
					<input type="hidden" name="mn" value="<?php echo $mn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
 					<input type="hidden" name="um" value="<?php echo $um;?>">
                	<input type="hidden" name="em" value="<?php echo $em;?>">

					<input type="submit" class="btn-warning" name="B2" value="Add To Basket" style="height: 40px; width: 250px; border-radius: 40px;"></form>
             </div></td>

 <?php
        if($i%2==3)
        {
            ?></tr><?php 
        }
        $i++;
    }?></table></body>
<?php
} 
?>

            
  
 

 