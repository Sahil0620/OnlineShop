<?php
if(isset($_POST["B1"]))
{
    require_once("includes/Mylib.php");
    $email=$_POST["m1"];
    $password=$_POST["m2"];
    $pass=md5($password);
    $sql="select * from logindata where email='$email' AND password='$pass'";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    if($n==1)
    {
        //Find usertype
        $rw=mysqli_fetch_array($result);
        $ut=$rw["usertype"];
		//create session
		session_start();
		$_SESSION["email"]=$email;
		$_SESSION["usertype"]=$ut;
		//send to page
        if($ut=="admin")
        {
            header("Location:Admin/AdminHome.php");
            die();
        }
        elseif($ut=="seller")
        {
            header("Location:seller/SellerHome.php");
            die();
        }
        elseif($ut=="user")
        {
            header("Location:user/UserHome.php");
            die();
        }
    }
    else
    {
        header("Location:LoginError.php");
        die();
    }
}
else
{
    header("Location:login.php");
}
?>