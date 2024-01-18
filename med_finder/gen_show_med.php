<?php include("a1.php");?>
<h1 class="hi">Medicines</h1>
<?php
    require_once("includes/Mylib.php");
$e11=$_POST["H1"];
$sql="select * from medicines where email_medical='$e11'";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
    while($rw=mysqli_fetch_array($result))
    {
        $mn=$rw["med_name"];
        $cn=$rw["company"];
        $ds=$rw["description"];
        $pr=$rw["price"];
        $mid=$rw["med_id"];
        ?>
        <h2 style="font-weight: bold; color: #00BE49;"><?php echo $mn;?></h2>
        <p class="pi">Company: <?php echo $cn;?></p>
        <p class="pi">Description: <?php echo $ds;?></p>
        <p class="pi">Price: <?php echo $pr;?></p>
        <hr>

        <?php
    }
}
?>
<?php include("a2.php");?>