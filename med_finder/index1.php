<?php include("a1.php"); ?>


<h1>Search Medicine</h1>
<form method="post" action="">
    <p>Medicine Name <input value="<?php if(isset($_POST["T1"])) echo $_POST["T1"];?>" type="text" name="T1" />
        <input type="submit" name="B1" value="Search" />
    </p>
</form>
<?php
if(isset($_POST["B1"]))
{
    require_once("includes/Mylib.php");
    $mname=$_POST["T1"];
    $sql="select * from medicine_medical where med_name LIKE '%$mname%'";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    if($n>0)
    {
        ?>
        <table width="100%">
            <?php
            while($rw=mysqli_fetch_array($result))
            {
                ?>
            <tr><td>
                <h4>Name:-<?php echo $rw["med_name"];?></h4>
                <p>
                    Company:-<?php echo $rw["company"];?></br>
                    price:-<?php echo $rw["price"];?><br/>
                    description:-<?php echo $rw["description"];?>
            </p>
                </td>
                <td>
                    <h4>Medical Name:-<?php echo $rw["medical_name"];?></h4>
                    <p>
                    Contact:-<?php echo $rw["contact"];?></br>
                    Address:-<?php echo $rw["address"];?>
                    
            </p>
                </td>
            </tr>
            <br>
            <?php
            }
            ?>
        </table>
            <?php
    }
    else
    {
        echo "<h3>No medicine found</h3>";
    }
}
?>
<?php include("a2.php"); ?>