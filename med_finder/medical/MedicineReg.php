<?php
    session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:../AuthError.php");
        die();
    }
$e11=$_SESSION["email"];
$ut=$_SESSION["usertype"];
if($ut!="medical")
{
    header("location:../AuthError.php");
    die();
}
?>
<?php include("c1.php");?>

<h1 class="hi">Medicines</h1>

<form name="form1" method="post" action="MedicineReg1.php" action="photodata.php" onSubmit="return medicinereg()" enctype="multipart/form-data">

    
    
         <p class="pi">Medicine Name:
    <input type="text" name="T1" id="T1"><span id="s1" class="si"></span>
  </p>
  <p class="pi">Company Name: 
    <input type="text" name="T2" id="T2"><span id="s2" class="si"></span>
  </p>
    <p class="pi">Description: 
    <input type="text" name="T3" id="T3"><span id="s3" class="si"></span>
    </p>
  <p class="pi">Price: 
    <input type="text" name="T4" id="T4"><span id="s4" class="si"></span>
    </p>
    <p>Upload Photo:-  <input type="file" name="F1" class="si">
   </p>
    <input type="submit" name="B1" id="B1" value="Add Medicine">
</form>
<?php include("c2.php");?>

<script>
function medicinereg()
{
    var t1,t2,t3,t4,t5,s1,s2,s3,s4,s5;
    var a,b,c,d,e;
    
    t1=document.getElementById("T1");
    t2=document.getElementById("T2");
    t3=document.getElementById("T3");
    t4=document.getElementById("T4");
 
    
    s1=document.getElementById("s1");
    s2=document.getElementById("s2");
    s3=document.getElementById("s3");
    s4=document.getElementById("s4");
 
    
    
    a=t1.value;
    b=t2.value;
    c=t3.value;
    d=t4.value;
 	
    
    
    s1.innerHTML="";
    s2.innerHTML="";
    s3.innerHTML="";
    s4.innerHTML="";
 
    
    
    if(a==null||a=="")
        {
            s1.innerHTML="*Enter Medicine Name";
            t1.focus();
            return false;
        }
    else if(b==null||b=="")
        {
            s2.innerHTML="*Enter Company Name";
            t2.focus();
            return false;
        }
    else if(c==null||c=="")
        {
            s3.innerHTML="*Enter Description";
            t3.focus();
            return false;
        }
    else if(d==null||d=="")
        {
            s4.innerHTML="*Enter Price";
            t4.focus();
            return false;
        }
	 
    
}
</script>
