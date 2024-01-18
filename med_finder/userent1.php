 <?php include("a1.php");?>

<?php
 if(isset($_POST["B1"]))

 {
		 
    require_once("includes/mylib.php");
    $n=$_POST["h1"];
    $email=$_POST["h2"];
    $cn=$_POST["h3"];
    $ps=$_POST["h4"];
    $pass=md5($ps);
    $ut="user";
    
    
		
    $sql1="insert into userdata values('$n','$email','$cn')";
    $sql2="insert into logindata values('$email','$pass','$ut')";
    $n1=mysqli_query($conn,$sql1);
    $n2=mysqli_query($conn,$sql2);
    $msg="";
    if($n1==1&&$n2==1)
    {
        $msg="Data Saved and login created";
    }
    elseif($n1==1)
            {
                $msg="Data saved but login not created";
            }
            elseif($n2==1)
            {
                $msg="Data not saved but login is created";
            }
            else
            {
                $msg="Neither Data is saved nor login is created";
            }
            ?>
                <h3><?php echo $msg;?></h3>
                <h3><a href="userent.php">Continue</a></h3>
<?php 
    }
    
else
{
    
    header("location:userent.php");
    
    die();
}
?>
<?php include("a2.php");?>
 
</html>