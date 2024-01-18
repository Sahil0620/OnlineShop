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
<h1 class="hi" style="color:#25578A;text-align: center;">Seller Registration</h1>
    <hr style="border:solid; border-color: lightpink;">
<form method="post" action="SellerReg1.php" onSubmit="return sellerreg()">
  <p class="pi">Seller Name:
    <input type="text" name="p1" id="p1" class="in"><span id="s1" class="si"></span>
  </p>
  <p class="pi">Owner Name: 
    <input type="text" name="p2" id="p2" class="in"><span id="s2" class="si"></span>
  </p>
  <p class="pi">GST No.: 
    <input type="text" name="p3" id="p3" class="in"><span id="s3" class="si"></span>
  </p>
  <p class="pi">Contact: 
    <input type="text" name="p4" id="p4" class="in"><span id="s4" class="si"></span>
  </p>
  <p class="pi">Email: 
    <input type="text" name="p5" id="p5" class="in"><span id="s5" class="si"></span>
  </p>
  <p class="pi">Address: 
    <input type="text" name="p6" id="p6" class="in"><span id="s6" class="si"></span>
  </p>
  <p class="pi">Password: 
    <input type="text" name="p7" id="p7" class="in"><span id="s7" class="si"></span>
  </p>
  <p class="pi">Confirm Password: 
    <input type="text" name="p8" id="p8" class="in"><span id="s8" class="si"></span>
  </p>
    <button type="submit" name="B1" class="btn-danger" style="margin-left: 150px; border-radius: 10px;  width:150px;  color: aliceblue; ">Add Seller</button>
</form>
</div>
<?php include("a2.php");?>

<script>
function sellerreg()
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
            s1.innerHTML="*Enter Seller Name";
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
            s3.innerHTML="*Enter GST No.";
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