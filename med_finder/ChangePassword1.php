<?php
$email=$_POST["t1"];
$op=$_POST["t2"];
$np=$_POST["t3"];
$cp=$_POST["t4"];
if(isset($_POST["B1"]))
{
    $conn=mysqli_connect("localhost","root","","med_finder");
    if(!$conn)
        {
            echo "<h3>Unable to connect</h3>";
            die();
        }
        $sqln="select * from logindata where email='$email'";
        $result=mysqli_query($conn,$sqln);
        $n=mysqli_num_rows($result);
        if($n>0)
        {
            $rw=mysqli_fetch_array($result);
            $de=$rw["email"];
            $dp=$rw["password"];
            if($op==$dp)
            {
                
                $sql="update logindata set password='$np' where email='$email'";
                mysqli_query($conn,$sql);
                $m=mysqli_affected_rows($conn);
                if($m==1)
                {
                    ?>
                    <h2>Password changed Successfully</h2>
                    <h1><a href="medical.php">Medical</a></h1>
                    <?php
                }
                else
                {
                    ?>
                    <h2>Password not changed</h2>
                    <h1><a href="medical.php">Medical</a></h1>
                    <?php
                }
            }
            else
            {
              ?>
                  <h2>Wrong Password</h2>
                  <h1><a href="medical.php">Medical</a></h1>
                <?php  
            }
        }
    else
        {
          ?>
              <h2>There is no registered email address</h2>
              <h1><a href="medical.php">Medical</a></h1>
            <?php  
        }
}
    
else
{
    header("location:medical.php");
    die();
}


?>