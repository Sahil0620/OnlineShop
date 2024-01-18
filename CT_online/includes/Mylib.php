<?php
$conn=mysqli_connect("localhost","root","","ct_online");
if(!$conn)
{
    echo "<h3>Unable to connect</h3>";
    die();
}
function getphoto($pp)
{
    global $conn;
    $sql="select * from photodata where product_pic='$pp'";
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