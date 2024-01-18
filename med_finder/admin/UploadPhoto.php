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
$msg="";
if(count($_FILES))
{
    if($_FILES["F1"]["size"])
    {
        //create address to save
        
        $target=dirname(__FILE__)."/photos/$e11-".basename($_FILES["F1"]["name"]);
        
        //move file from temporary space to target
        if(move_uploaded_file($_FILES["F1"]["tmp_name"],$target))
        {
            //save name of file in data table
            $addr="$e11-".basename($_FILES["F1"]["name"]);
            $sql="insert into photodata values('$e11','$addr')";
            require_once("../includes/Mylib.php");
            $n=mysqli_query($conn,$sql);
            if($n==1)
            {
                $msg="Photo uploaded successfully";
            }
            else
            {
                $msg="Error : Already exists";
            }
        }
        else
        {
            $msg="Cannot fetch file from temporary space";
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
?>
<h3><?php echo $msg;?></h3>
<h2><a href="AdminHome.php">Continue</a></h2>