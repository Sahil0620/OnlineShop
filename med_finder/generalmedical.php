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
  ?>
        <table width="100%">
        <?php
    $i=0;
    while($rw=mysqli_fetch_array($result))
    {
        if($i%3==0)
        {
            ?><tr><?php
        }
            $mn=$rw["medical_name"];
            $ow=$rw["owner_name"];
            $ln=$rw["lno"];
            $cont=$rw["contact"];
            $ads=$rw["address"];
            $email=$rw["email"];
            ?>

            <td width="25%">
            <h3 style="color: darkmagenta; font-weight: bold;"><?php echo $mn;?></h3>
            <p class="pi">Owner: <?php echo $ow;?></p>
            <p class="pi">License No.: <?php echo $ln;?></p>
            <p class="pi">Contact: <?php echo $cont;?></p>
            <p class="pi">Email: <?php echo $email;?></p>
            <p class="pi">Address: <?php echo $ads;?></p>

            <form method="post" action="gen_show_med.php">
                    <input type="hidden" name="H1" value="<?php echo $email;?>">
                    <input type="submit" name="B1" value="Medicines of the Store">
                </form></td>
                <?php
        if($i%3==2)
        {
            echo "</tr>"; 
        }
        $i++;
    }?></table><?php
}?>
        </div>   
<?php include("a2.php");?>