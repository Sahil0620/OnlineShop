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
<h1 class="hi">Admin  Registration</h1>
<form name="form1" method="post" action="AdminReg1.php" onSubmit="return adminreg()">
  <p class="pi">Name:
    <input type="text" name="T1" id="T1" ><span id="s1" class="si"></span>
  </p>
  <p class="pi">Address:
    <input type="text" name="T2" id="T2"><span id="s2" class="si"></span>
  </p>
  <p class="pi">Contact:
    <input type="text" name="T3" id="T3"><span id="s3" class="si"></span>
  </p>
  <p class="pi">Email:
    <input type="text" name="T4" id="T4"><span id="s4" class="si"></span>
  </p>
  <p class="pi">Password:
    <input type="text" name="T5" id="T5"><span id="s5" class="si"></span>
  </p>
  <p class="pi">Confirm Password:
    <input type="text" name="T6" id="T6"><span id="s6" class="si"></span>
  </p>
    <input type="submit" name="B1" value="Registration">
</form>
<?php include("b2.php");?>

<script>
function adminreg()
{
    var t1,t2,t3,t4,t5,t6,s1,s2,s3,s4,s5,s6;
    var a,b,c,d,e,f;
    
    t1=document.getElementById("T1");
    t2=document.getElementById("T2");
    t3=document.getElementById("T3");
    t4=document.getElementById("T4");
    t5=document.getElementById("T5");
    t6=document.getElementById("T6");
    
    s1=document.getElementById("s1");
    s2=document.getElementById("s2");
    s3=document.getElementById("s3");
    s4=document.getElementById("s4");
    s5=document.getElementById("s5");
    s6=document.getElementById("s6");
    
    a=t1.value;
    b=t2.value;
    c=t3.value;
    d=t4.value;
    e=t5.value;
    f=t6.value;
    
    s1.innerHTML="";
    s2.innerHTML="";
    s3.innerHTML="";
    s4.innerHTML="";
    s5.innerHTML="";
    s6.innerHTML="";
    
    if(a==null||a=="")
        {
            s1.innerHTML="*Enter Name";
            t1.focus();
            return false;
        }
    else if(b==null||b=="")
        {
            s2.innerHTML="*Enter Address";
            t2.focus();
            return false;
        }
    else if(c==null||c=="")
        {
            s3.innerHTML="*Enter Contact";
            t3.focus();
            return false;
        }
    else if(d==null||d=="")
        {
            s4.innerHTML="*Enter Email";
            t4.focus();
            return false;
        }
    else if(e==null||e=="")
        {
            s5.innerHTML="*Enter Password";
            t5.focus();
            return false;
        }
    else if(f==null||f=="")
        {
            s6.innerHTML="*Enter Confirm Password";
            t6.focus();
            return false;
        }
    else if(e!=f)
        {
            s6.innerHTML="*Not Matched";
            t6.select();
            return false;
        }
}
</script>