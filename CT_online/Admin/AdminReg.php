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
<style>
.in
    {
        width: 250px;
        border-radius: 10px;
        float: right;
        margin-right: 10px;
    }
    p
    {
        font-family: "Arial"; 
        margin-left: 10px;
    }

</style>
<?php include("a1.php");?>
<div class="form-control-plaintext" style="height: auto; width: 450px; border: thick; border-radius: 20px; border-color: black; box-shadow: 0 0 20px black;  margin-left: 20px; background-color:#C5F4F4;" >
<h1 class="hi" style="color:#25578A;text-align: center;">Admin  Registration</h1>
    <hr style="border:solid; border-color: lightpink;">
<form name="form1" method="post" action="AdminReg1.php" onSubmit="return adminreg()">
  <p class="pi">Name:
    <input type="text" name="T1" id="T1" class="in" ><span id="s1" class="si"></span>
  </p>
  <p class="pi">Address:
    <input type="text" name="T2" id="T2" class="in"><span id="s2" class="si"></span>
  </p>
  <p class="pi">Contact:
    <input type="text" name="T3" id="T3" class="in"><span id="s3" class="si"></span>
  </p>
  <p class="pi">Email:
    <input type="text" name="T4" id="T4" class="in"><span id="s4" class="si"></span>
  </p>
  <p class="pi">Password:
    <input type="text" name="T5" id="T5" class="in"><span id="s5" class="si"></span>
  </p>
  <p class="pi">Confirm Password:
    <input type="text" name="T6" id="T6" class="in"><span id="s6" class="si"></span>
  </p>
    <button type="submit" name="B1" class="btn-danger" style="margin-left: 150px; border-radius: 10px;  width:150px;  color: aliceblue; ">Add Admin</button>
</form>
<?php include("a2.php");?>

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