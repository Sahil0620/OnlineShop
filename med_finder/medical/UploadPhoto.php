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
include("c1.php");
$msg="";
if(count($_FILES))
{
    if($_FILES["F1"]["size"])
    {
        //create address to save
        $target=dirname(__FILE__)."/photos/$e11-".basename($_FILES["F1"]["name"]);
        
        //move file from temporary spce to target
        if(move_uploaded_file($_FILES["F1"]["tmp_name"],$target))
        {
                $addr="$e11-".basename($_FILES["F1"]["name"]);
                $sql="insert into photodata values('$e11','$addr')";
                require_once("../includes/Mylib.php");
                $n=mysqli_query($conn,$sql);
                if($n==1)
                {
                    $msg="photo uploaded successfully";
                }
                else
                {
                    $msg="Error: Already Exists";
                }
            
        }
        else
                {
                    $msg="Cannot fetch file form temporary space";
                }
    }
        else
        {
            $msg="Zero byte Uploaded";
                
        }
    }
      else
        {
            $msg="No file uploaded";
                
        }
    
        ?>
    <h3><?php echo $msg; ?></h3>
    <h2><a href="MedicalHome.php">Continue</a></h2>
<?php include("c2.php");?>