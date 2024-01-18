<?php 
//check session
session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$e1=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="admin")
{
	header("Location:../AuthError.php");
	die();
}
?>
<?php include("b1.php");?>
<h1 class="hi">Medical Registration</h1>
<form method="post" action="medicalReg1.php" onSubmit="return medicalreg()" class="card bg-transparent">
  <p class="pi">Medical Name:
    <input type="text" name="p1" id="p1"><span id="s1" class="si"></span>
  </p>
  <p class="pi">Owner Name: 
    <input type="text" name="p2" id="p2"><span id="s2" class="si"></span>
  </p>
  <p class="pi">Licence No.: 
    <input type="text" name="p3" id="p3"><span id="s3" class="si"></span>
  </p>
  <p class="pi">Contact: 
    <input type="text" name="p4" id="p4"><span id="s4" class="si"></span>
  </p>
  <p class="pi">Email: 
    <input type="text" name="p5" id="p5"><span id="s5" class="si"></span>
  </p>
  <p class="pi">Address: 
    <input type="text" name="p6" id="p6"><span id="s6" class="si"></span>
  </p>
  <p class="pi">Password: 
    <input type="text" name="p7" id="p7"><span id="s7" class="si"></span>
  </p>
  <p class="pi">Confirm Password: 
    <input type="text" name="p8" id="p8"><span id="s8" class="si"></span>
  </p>
    <input type="submit" name="B1" id="B1" value="Registration">
</form>
<?php include("b2.php");?>

<script>
function medicalreg()
{
    var t1,t2,t3,t4,t5,t6,t7,t8,s1,s2,s3,s4,s5,s6,s7,s8;
    var a,b,c,d,e,f,g,h;
    
    t1=document.getElementById("p1");
    t2=document.getElementById("p2");
    t3=document.getElementById("p3");
    t4=document.getElementById("p4");
    t5=document.getElementById("p5");
    t6=document.getElementById("p6");
    t7=document.getElementById("p7");
    t8=document.getElementById("p8");
    
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
            s1.innerHTML="*Enter Medical Name";
            t1.focus();
            return false;
        }
    else if(b==null||b=="")
        {
            s2.innerHTML="*Enter Owner Name";
            t2.focus();
            return false;
        }
    else if(c==null||c=="")
        {
            s3.innerHTML="*Enter Licence No.";
            t3.focus();
            return false;
        }
    else if(d==null||d=="")
        {
            s4.innerHTML="*Enter Contact";
            t4.focus();
            return false;
        }
    else if(e==null||e=="")
        {
            s5.innerHTML="*Enter Email";
            t5.focus();
            return false;
        }
    else if(f==null||f=="")
        {
            s6.innerHTML="*Enter Address";
            t6.focus();
            return false;
        }
    else if(g==null||g=="")
        {
            s7.innerHTML="Enter Password";
            t7.focus();
            return false;
        }
    else if(h==null||h=="")
        {
            s8.innerHTML="*Enter Confirm Password";
            t8.focus();
            return false;
        }
    else if(g!=h)
        {
            s8.innerHTML="*Not Matched";
            t8.select();
            return false;
        }
}
</script>