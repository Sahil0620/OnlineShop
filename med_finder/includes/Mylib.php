<?php
$conn=mysqli_connect("localhost","root","","med_finder");
 if(!$conn)
{
    echo "<h3>Unable to connect</h3>";
    die();
}
function getphoto($email)
{
    global $conn;
    $sql="select * from photodata where email='$email'";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    $photo="no";
    if($n>0)
    {
        $rw=mysqli_fetch_array($result);
        $photo=$rw["photo"];
    }
    return $photo;
}
?>