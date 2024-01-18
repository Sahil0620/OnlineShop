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
<?php include("a1.php");?>

<h1>Change Password</h1>
<?php
    /*if(isset($_POST["B1"]))
    {*/
        ?>
            <form method="post" action="">
                <p>Email:- <input type="email" readonly value="<?php echo $e11; ?>"</p>
                    <p>Old Password:- <input type="text" name="k1"></p>
                    <p>New Password:- <input type="text" name="k2"></p>
                    <p>Confirm Password:- <input type="text" name="k3"></p>
                    <input type="submit" name="B2" value="Change Password">
                
            </form>
        <?php
    /*}*/
    if(isset($_POST["B2"]))
    {
        require_once("../includes/Mylib.php");
        $sql="select * from logindata where email='$e11'";
        $result=mysqli_query($conn,$sql);
        $n=mysqli_num_rows($result);
        
        if($n>0)
        {
            $op=$_POST["k1"];
            $oldpass=md5($op);
            $np=$_POST["k2"];
            $newpass=md5($np);
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
                    <h2>Password Change Successfully</h2>
                    <h1><a href="AdminHome.php">Admin Home</a></h1>
                    <?php
                     
                }
                else
                {
                    ?>
                    <h2>Password Not Change </h2>
                    <h1><a href="AdminHome.php">Admin Home</a></h1>
                    <?php
                     
                }
            }
            else
                {
                    ?>
                    <h2>wrong password</h2>
                    <h1><a href="AdminHome.php">Admin Home</a></h1>
                    <?php
                     
                }
        }  
    }
?>
<?php include("a2.php");?>
