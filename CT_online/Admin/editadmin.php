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

<?php include("a1.php");?>
<h1>Edit Admin</h1>
<?php
    if(isset($_POST["B1"]))
    {
        require_once("../includes/Mylib.php");
        $sql="select * from admindata where email='$e1'";
        $result=mysqli_query($conn,$sql);
        $n=mysqli_num_rows($result);
        if($n>0)
        {
            $rw=mysqli_fetch_array($result);
            $na=$rw["name"];
            $ad=$rw["address"];
            $cn=$rw["contact"];
            $email=$e1;
            ?>
            <form method="post" action="editadmin.php">
            <p class="pi">Name:
            <input type="text" name="T1" id="T1" class="in" value="<?php echo $na; ?>" ><span id="s1" class="si"></span>
          </p>
          <p class="pi">Address:
            <input type="text" name="T2" id="T2" class="in" value="<?php echo $ad; ?>"><span id="s2" class="si"></span>
          </p>
          <p class="pi">Contact:
            <input type="text" name="T3" id="T3" class="in" value="<?php echo $cn; ?>"><span id="s3" class="si"></span>
          </p>
          <p class="pi">Email:
            <input type="text" readonly name="T4" id="T4" class="in" value="<?php echo $email; ?>"><span id="s4" class="si"></span>
          </p>
  
            <button type="submit" name="B2" class="btn-danger" style="margin-left: 150px; border-radius: 10px;  width:150px;  color: aliceblue; ">Edit Admin</button>
            </form>
<?php
        }
    }
    elseif(isset($_POST["B2"]))
    {
        require_once("../includes/Mylib.php");
        $na=$_POST["T1"];
        $ad=$_POST["T2"];
        $cn=$_POST["T3"];
        $email=$_POST["T4"];
        $sql="update admindata set name='$na', address='$ad', contact='$cn' where email='$email'";
        mysqli_query($conn,$sql);
        $n=mysqli_affected_rows($conn);
        if($n==1)
        {
            $msg="Admin Data Edited";
            
        }
        else
        {
            $msg="Admin Data Not Edited";
        }
        echo $msg;
        echo "<h3><a href='adminprofile.php'>Admin Profile</a></h3>";
    
    }
    else
    {
        header("location:adminprofile.php");
        die();
    }
?>
<?php include("a2.php");?>
    