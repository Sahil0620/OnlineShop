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
<h1 class="hi">Edit Profile</h1>
<?php
if(isset($_POST["B1"]))
{
        require_once("../includes/Mylib.php");
        $email=$_POST["T1"];
        $sql="select * from admindata where email='$email'";
        $result=mysqli_query($conn,$sql);
        $n=mysqli_num_rows($result);

        if($n>0)
        {
            $rw=mysqli_fetch_array($result);
                $an=$rw["name"];
                $cn=$rw["contact"];
                $ad=$rw["address"];
                ?>
                <form method="post" action="">
                    <p class="pi">Admin Name:
                    <input type="text" name="T1" id="T1" value="<?php echo $an;?>">
                  </p>
                  <p class="pi">Address: 
                    <input type="text" name="T2" id="T2" value="<?php echo $ad;?>">
                  </p>
                    <p class="pi">Contact: 
                    <input type="text" name="T3" id="T3" value="<?php echo $cn;?>">
                    </p>
                    <p class="pi">Email: <input type="text" readonly name="T4" value="<?php echo $email;?>" ></p>
                    <input type="submit" value="Edit" name="B2">
                </form>
        <?php
        }
}
    elseif(isset($_POST["B2"]))
    {
        require_once("../includes/Mylib.php");
        $an=$_POST["T1"];
        $ad=$_POST["T2"];
        $cn=$_POST["T3"];
        $email=$_POST["T4"];
        $sql="update admindata set name='$an',contact='$cn',address='$ad' where email='$email'";
        mysqli_query($conn,$sql);
        $n=mysqli_affected_rows($conn);
        if($n==1)
            {
                $msg="Profile Edited Successfully";
            }
            else
            {
                $msg="Profile not Edited";
            }
            ?>
            <h3 class="si"><?php echo $msg;?></h3>
            <h3><a href="AdminHome.php">Home</a></h3>

    <?php
        }
    else
    {
    header("location:AdminHome.php");
        die();
    }
    ?>
<?php include("b2.php");?>