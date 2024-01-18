
 
<?php include("a1.php"); ?>

<h6>user details </h6>
<body>
    <?php require_once("includes/Mylib.php"); ?>
    
    <form method="post" action="product.php" enctype="multipart/form-data" onSubmit="return userdetail()">
    <p class="pi">First Name
    <input type="text" name="T1" id="T1"></p><span id="s1" class="s1"></span>
    <p class="pi">Last Name
    <input type="text" name="T2" id="T2"></p><span id="s2" class="s2"></span>
    <p class="pi">Email
    <input type="email" name="T3" id="T3" ></p><span id="s3" class="s3"></span>
    
    <p class="pi">Contact
    <input type="tel" name="T4" id="T4"></p><span id="s4" class="s4"></span>
    <p class="pi"> Address
    <input type="text" name="T5" id="T5" ></p><span id="s5" class="s5"></span>
    
    <p class="pi">Pin Code
    <input type="text" name="T6" id="T6"></p><span id="s6" class="s6"></span>
    <p class="pi">City
    <input type="text" name="T7" id="T7"></p><span id="s7" class="s7"></span>
    <p class="pi">State
    <input type="text" name="T8" id="T8"></p><span id="s9" class="s8"></span>
    
    <p>    <input type="submit" name="B1" id="B1" value="proceed" />
      </p>
    
    </form>
    <script>	
 function userdetail()
{
    var t1,t2,t3,t4,t5,tt6,t7,t8,s1,s2,s3,s4,s5,s6,s7,s8;
    var a,b,c,d,e,f,g,h;
    
    t1=document.getElementById("T1");
    t2=document.getElementById("T2");
    t3=document.getElementById("T3");
    t4=document.getElementById("T4");
    t5=document.getElementById("T5");
    t6=document.getElementById("T6");
    t7=document.getElementById("T7");
    t8=document.getElementById("T8");
 

 
    
    s1=document.getElementById("s1");
    s2=document.getElementById("s2");
    s3=document.getElementById("s3");
    s4=document.getElementById("s4");
	s5=document.getElementById("s5");
    s6=document.getElementById("s6");
    s7=document.getElementById("s7");
    s8=document.getElementById("s8");
 
 
    
    
    a=t1.value;
    b=t2.value;
    c=t3.value;
    d=t4.value;
	e=t5.value;
    f=t6.value;
    g=t7.value;
    h=t8.value;
  	
    
    
    s1.innerHTML="";
    s2.innerHTML="";
    s3.innerHTML="";
    s4.innerHTML="";
	   
    s5.innerHTML="";
    s6.innerHTML="";
    s7.innerHTML="";
    s8.innerHTML="";
 
 
    
    
    if(a==null||a=="")
        {
            s1.innerHTML="*Enter First Name";
            t1.focus();
            return false;
        }
    else if(b==null||b=="")
        {
            s2.innerHTML="*Enter Last Name";
            t2.focus();
            return false;
        }
    else if(c==null||c=="")
        {
            s3.innerHTML="*Enter contact";
            t3.focus();
            return false;
        }
    else if(d==null||d=="")
        {
            s4.innerHTML="*Enter email";
            t4.focus();
            return false;
        }
		else if(e==null||e=="")
        {
            s5.innerHTML="*Enter adreess";
            t5.focus();
            return false;
        }
		else if(f==null||f=="")
        {
            s6.innerHTML="*pincod";
            t6.focus();
            return false;
        }
		else if(g==null||g=="")
        {
            s7.innerHTML="*";
            t7.focus();
            return false;
        }
		else if(h==null||h=="")
        {
            s8.innerHTML="*city";
            t8.focus();
            return false;
        } 
	 
    
}
 
    </script>
    <?php 
	if(isset($_POST["B1"]))
	{	
	  $Fn=$_POST["T1"];
	  $Ln=$_POST["T2"];
	  $con=$_POST["T3"];
	  $email=$_POST["T4"];
	  $address=$_POST["T5"];
	  $pin=$_POST["T6"];
	  $city=$_POST["T7"];
	  $state=$_POST["T8"];
 	
	   
$sql=" INSERT INTO `user_detail`(`user_id`, `First_name`, `Last_name`, `contact`, `email`, `address`, `pin`, `city`, `state`) VALUES ('','$Fn','$Ln','$con','$email','$address','$pin','$city','$state')" ;
		$n=mysqli_query($conn,$sql);
			$msg="";
		if($n==1)
		{
			$msg="Data saved ";
		}
		 
		else
		{
			$msg="Not data saved";
		}
		
		?>
		<h3><?php echo $msg; ?></h3>
     <?php
  }  
  ?>
</body>
 
<?php include("a2.php"); ?>
