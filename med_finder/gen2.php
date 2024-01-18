 <?php include("a1.php");?>
<h1 class="hi">Medical Store</h1>
<div class="col-md-auto">
<?php
require_once("includes/Mylib.php");
$sql="select * from medicaldata";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
    $i=0;
    while($rw=mysqli_fetch_array($result))
    {
        if($i%4==0)
        {
            ?><div class="row"><?php
        }
            $mn=$rw["medical_name"];
            $ow=$rw["owner_name"];
            $ln=$rw["lno"];
            $cont=$rw["contact"];
            $ads=$rw["address"];
            $email=$rw["email"];
            ?>

            <div class="card"><div class="col-4">
            <h3 style="color: darkmagenta; font-weight: bold;"><?php echo $mn;?></h3>
            <p class="pi">Owner: <?php echo $ow;?></p>
            <p class="pi">License No.: <?php echo $ln;?></p>
            <p class="pi">Contact: <?php echo $cont;?></p>
            <p class="pi">Email: <?php echo $email;?></p>
            <p class="pi">Address: <?php echo $ads;?></p><br >

            <form method="post" action="gen_show_med.php">
                    <input type="hidden" name="H1" value="<?php echo $email;?>">
                    <input type="submit" name="B1" value="Medicines of the Store">
                </form></div></div>
                <?php
        if($i%3==0)
        {
            ?></div><?php 
        }
        $i++;
    }
}?>
        </div>   
<?php include("a2.php");?>