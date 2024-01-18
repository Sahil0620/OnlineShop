<?php 
//check session
session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:../AuthError.php");
	die();
}
$e11=$_SESSION["email"];
$u=$_SESSION["usertype"];
if($u!="seller")
{
	header("Location:../AuthError.php");
	die();
}
?>
<?php include("s1.php"); ?>
<?php
if(isset($_POST["B1"]))
{
    $pn=$_POST["s1"];
    $co=$_POST["s2"];
    $pc=$_POST["s3"];
    $ds=$_POST["s4"];
    $pr=$_POST["s5"];

    if(count($_FILES))
    {
        if($_FILES["F1"]["size"])
        {
            require_once("../includes/Mylib.php");
            $target=dirname(__FILE__)."/product_photos/$e11-".basename($_FILES["F1"]["name"]);
            if(move_uploaded_file($_FILES["F1"]["tmp_name"],$target))
            {
                $addr="$e11-".basename($_FILES["F1"]["name"]);
                $sql1="insert into productdata values ('0','$pn','$co','$pc','$ds','$pr','$addr','$e11')";
                $n=mysqli_query($conn,$sql1);
                if($n==1)
                {
                    $msg="Your Product Has been Registered Successfully";
                }
                else
                {
                    $msg="Your Product Has Not Registered";
                }
            }
            else
             {
                    $msg="Your Product File can't fetch from temporary space";
             }
        }
        else
         {
                $msg="Zero bytes uploaded";
         }
    }
    else
    {
        $msg ="No File Uploaded";
    }
}
?>
<h3><?php echo $msg;?></h3>
<h2><a href="#">Continue</a></h2>
<?php include("s2.php"); ?>