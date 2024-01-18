<?php
    session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:../AuthError.php");
        die();
    }
$e11=$_SESSION["email"];
$ut=$_SESSION["usertype"];
if($ut!="medical")
{
    header("location:../AuthError.php");
    die();
}
?>
<?php include("c1.php");?>
<h1 class="hi">Edit Medicine</h1>
<?php
    if(isset($_POST["B1"]))
    {
        
        require_once("../includes/Mylib.php");
        $mid=$_POST["mid"];
        $sql="select * from medicines where med_id='$mid'";
        $result=mysqli_query($conn,$sql);
        $n=mysqli_num_rows($result);

        if($n>0)
        {
            $rw=mysqli_fetch_array($result);
                $mn=$rw["med_name"];
                $cn=$rw["company"];
                $ds=$rw["description"];
                $pr=$rw["price"];
                $mid=$rw["med_id"];
                ?>
                <form method="post" action="EditMedicine.php">
                    <p class="pi">Medicine Name:
                    <input type="text" name="T1" id="T1" value="<?php echo $mn;?>">
                  </p>
                  <pclass="pi">Company Name: 
                    <input type="text" name="T2" id="T2" value="<?php echo $cn;?>">
                  </p>
                    <pclass="pi">Description: 
                    <input type="text" name="T3" id="T3" value="<?php echo $ds;?>">
                    </p>
                  <p class="pi">Price: 
                    <input type="text" name="T4" id="T4" value="<?php echo $pr;?>">
                    </p>
                    <input type="hidden" name="mid" value="<?php echo $mid;?>" >
                    <input type="submit" value="Edit" name="B2">
                </form>
        <?php
        }
    }
    elseif(isset($_POST["B2"]))
    {
        $mn=$_POST["T1"];
        $cn=$_POST["T2"];
        $ds=$_POST["T3"];
        $pr=$_POST["T4"];
        $mid=$_POST["mid"];
        require_once("../includes/Mylib.php");
        $sql="update medicines set med_name='$mn',company='$cn',description='$ds',price='$pr' where med_id='$mid'";
        mysqli_query($conn,$sql);
        $n=mysqli_affected_rows($conn);
        if($n==1)
            {
                $msg="Edited Medicine is Saved Successfully";
            }
            else
            {
                $msg="Edited Medicine is not Saved ";
            }
            ?>
            <h3 class="si"><?php echo $msg;?></h3>
            <h3><a href="ShowMedicine.php">Show Medicine Data</a></h3>

    <?php
        }
    else
    {

    header("location:ShowMedicine.php");
        die();
    }
    ?>
<?php include("c2.php");?>