<script>
function newpassword()//New password checking fron confirm password
    {
        var n,o,n1,o1,a,b;
        n=document.getElementById("t3");
        o=document.getElementById("t4");
        n1=document.getElementById("n1");
        o1=document.getElementById("o1");
        a=n.value;
        b=o.value;
        n1.innerHTML="";
        o1.innerHTML="";
        if(a!=b)
            {
                o1.innerHTML="Not matched with password enter again";
                o.select();
                return false;
            }
    }
</script>


<?php
    session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:../AuthError.php");
        die();
    }
$e11=$_SESSION["email"];
$ut=$_SESSION["usertype"];
if($ut!="admin")
{
    header("location:../AuthError.php");
    die();
}
?>
<?php include("b1.php");?>
<h1>Profile Password Change</h1>
<?php
if(isset($_POST["B1"]))
{
?>
    <form method="post" action="" onSubmit="return newpassword()">
        <p>Email:<input type="text" readonly value="<?php echo $e11; ?>"></p>
        <p>Old Password: <input type="text" name="t2"></p>
        <p>New Password: <input type="text" name="t3" id="t3"><span id="n1"></span></p>
        <p>Confirm Password: <input type="text" name="t4" id="t4"><span id="o1"></span></p>
        <input type="submit" name="B2" value="Next">
    </form>
<?php
}
elseif(isset($_POST["B2"]))
{
    require_once("../includes/Mylib.php");
    $sql="select * from logindata where email='$e11'";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    if($n>0)
        {
            $op=$_POST["t2"];
            $oldpass=md5($op);
            $np=$_POST["t3"];
            $newpass=md5($np);
            $cp=$_POST["t4"];
            $rw=mysqli_fetch_array($result);
            $dp=$rw["password"];
            if($oldpass==$dp)
            {
                
                $sql="update logindata set password='$newpass' where email='$e11'";
                mysqli_query($conn,$sql);
                $m=mysqli_affected_rows($conn);
                if($m==1)
                {
                    ?>
                    <h2>Password changed Successfully</h2>
                    <h1><a href="AdminHome.php">Admin Home</a></h1>
                    <?php
                }
                else
                {
                    ?>
                    <h2>Password not changed</h2>
                    <h1><a href="AdminHome.php">Admin Home</a></h1>
                    <?php
                }
            }
            else
            {
              ?>
                  <h2>Wrong Password</h2>
                  <h1><a href="AdminHome.php">Admin Home</a></h1>
                <?php  
            }
        }
}
else
{
    header("location:AdminHome.php");
    die();
}
?>
<?php include("b2.php");?>