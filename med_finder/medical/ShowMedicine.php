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
<h1 class="hi">Medicines</h1>
<?php
    require_once("../includes/Mylib.php");
 $sql="select * from medicines where email_medical='$e11'";
 $result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
    $i=1;
    while($rw=mysqli_fetch_array($result))
    {
        if($i%4==0)
        {
            ?><div class="row">
            <?php
        }
		  $mid=$rw["med_id"];
         $mn=$rw["med_name"];
        $cn=$rw["company"];
        $ds=$rw["description"];
        $pr=$rw["price"];
	    $ph=$rw["photo"];

        ?>
        <div class="card">
            <div class="card-columns">
   
                <p class="pi"><img src="photos/<?php echo $ph;?>" width="120px" height="125px"></p>
               
                 <h2 style="font-weight: bold; color: #00BE49;"><?php echo $mn;?></h2>
                <p class="pi">Company: <?php echo $cn;?></p>
                <p class="pi">Description: <?php echo $ds;?></p>
                <p class="pi">Price: <?php echo $pr;?></p>
                <form method="post" action="EditMedicine.php">
                    <input type="hidden" name="mid" value="<?php echo $mid;?>" >
                    <input type="submit" value="Edit" name="B1">
                </form>
                <form method="post" action="DeleteMedicine.php">
                    <input type="hidden" name="mid" value="<?php echo $mid;?>" >
                    <input type="submit" value="Delete" name="B1">
                </form><hr>
            </div>
        </div>
        <?php
        if($i%3==2)
        {
            ?></div>
            <?php
        }
    }
}
else
{
    ?>
<h3 class="si">No Medicine Found</h3>
<h3><a href="MedicineReg.php">Add Medicine First</a></h3>
<?php
}
?>
<?php include("c2.php");?>