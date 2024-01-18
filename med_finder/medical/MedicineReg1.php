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
<h1>Medicines</h1>

 
<?php
    if(isset($_POST["B1"]))
    {
		 
        $mn=$_POST["T1"];
        $cn=$_POST["T2"];
        $ds=$_POST["T3"];
        $pr=$_POST["T4"];
		
		if(count($_FILES))
		{	
		  if($_FILES["F1"]["size"])
		  {
			      require_once("../includes/Mylib.php");
	              $target=dirname(__FILE__)."/photos/$e11-".basename($_FILES["F1"]["name"]);
		          if(move_uploaded_file($_FILES["F1"]["tmp_name"],$target))
				  {	
				   $addr="$e11-".basename($_FILES["F1"]["name"]);
				   $a1="insert into medicines values ('0','$mn','$cn','$ds','$pr','$addr','$e11')";
                   $n=mysqli_query($conn,$a1);
                   if($n==1)
                       {
                         $msg="Medicine is Saved Successfully";
                        }
                       else
                         {
                             $msg="Medicine is not Saved ";
                         }

				  }
				  else
				  {	
				     $msg="your file cannot fatch";
				  }
		       }
		  else
		  {	
		    $msg="zero byte uploded";
		  }
		} 
		else
		{	
		  $msg="no file uploded";
		}
	}
		  	  
        ?>
        <h3><?php echo $msg;?></h3>
        <h3><a href="MedicalHome.php">Continue</a></h3>
        <h3><a href="MedicineReg.php">Add more medicine</a></h3>

       
<?php include("c2.php");?>