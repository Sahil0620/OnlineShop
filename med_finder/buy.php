 
 
 
 <?php include("a1.php"); ?>
 <style>
  .pro_image{width:600px;
              height:400px;
			  display:inline-block;
			  padding:20px;
			  	  	  border-right: solid 1px;

  }
  
  img{width:560px;
      height:300px;

	  }
  .pro_dec{ width:600px;
          height:400px;
  	  float:right;
	  padding:20px;
	  margin-right:20px;
	
	}	
  	
	
 
 
 </style>
 <?php 

session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$um=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="user")
{
	header("Location:../AuthError.php");
	die();
}
?>

    
 
  <?php
    require_once("includes/Mylib.php");
 	
$id=$_POST["H1"];
$sql="select * from medicines where med_id='$id'";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);
	
if($n>0)
{
    while($rw=mysqli_fetch_array($result))
    {
        $mn=$rw["med_name"];
        $cn=$rw["company"];
        $ds=$rw["description"];
        $pr=$rw["price"];
		$ph=$rw["photo"];
        $mid=$rw["med_id"];
		$em=$rw["email_medical"];
        ?>
   <div>
   <div class="pro_image " style="background-color:">
       <p class="card"><img src="medical/photos/<?php echo $ph;?>"></p>
       </div>
       
       <div class="pro_dec" style="text-align:center">
        <h2 style="font-weight: bold; color: #00BE49;"><?php echo $mn;?></h2>
        <p class="pi">Company: <?php echo $cn;?></p>
        <p class="pi">Description: <?php echo $ds;?></p>
        <p class="pi">Price: <?php echo $pr;?>-/</p>
           
           
           <form method="post" action="user/cheackout.php">
					<input type="hidden" name="mid" value="<?php echo $mid;?>">
					<input type="hidden" name="ph" value="<?php echo $ph;?>">
					<input type="hidden" name="mn" value="<?php echo $mn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
					<input type="hidden" name="um" value="<?php echo $um;?>">
					<input type="hidden" name="em" value="<?php echo $em;?>">
					<input type="submit" class="btn-danger" name="B3" value="Buy Now" style="height: 40px; width: 250px; border-radius: 30px;"></form></th>
         
         
          <form method="post" action="user/add in cart.php" style="padding-top:20PX;">
					<input type="hidden" name="mid" value="<?php echo $mid;?>">
					<input type="hidden" name="ph" value="<?php echo $ph;?>">
					<input type="hidden" name="mn" value="<?php echo $mn;?>">
					<input type="hidden" name="pr" value="<?php echo $pr;?>">
 					<input type="hidden" name="um" value="<?php echo $um;?>">
                	<input type="hidden" name="em" value="<?php echo $em;?>">

					<input type="submit" class="btn-warning" name="B2" value="Add To Basket" style="height: 40px; width: 250px; border-radius: 30px;"></form>
	<br>
          
          </div>
       </div>
        <?php
	
    }
}
	
?><div class="card bg-transparent">
 	<div class="col-md-6" align="center" style="color: yellow; text-shadow: 0 0 15px blue;">
		<?php
		$sql1="select * from medicaldata where email='$em'";
		$result1=mysqli_query($conn,$sql1);
		$n1=mysqli_num_rows($result1);
		
	if($n1>0)
	{
		$rw1=mysqli_fetch_array($result1);
		
			$sn1=$rw1["medical_name"];
            $on1=$rw1["owner_name"];
            $gst1=$rw1["lno"];
            $ad1=$rw1["address"];
            $cn1=$rw1["contact"];
            ?><div class="text" style="color:#F00">
		<h3>Seller Details: </h3>
            <h3> <?php echo $sn1;?> </h3>
            <h3>Address:- <?php echo $ad1;?></h3>
            <h3> contact: <?php echo $cn1 ?></h3>
            </div>
		
		<?php
	}
		?>
	</div>
 	<div class="col-md-6"></div>
</div>

<?php

	
?>

<?php include("a2.php"); ?>