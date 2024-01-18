
<body background="medical/photos/jaya@gmail.com-ak@gmail.com-depositphotos_137329928-stock-photo-medicines-and-drugs-on-table.jpg">
<?php 
    require_once("includes/Mylib.php");
    $mname=$_REQUEST["q"];
    $sql="select * from medicine_medical where med_name LIKE '%$mname%'";
    $result=mysqli_query($conn,$sql);
    $n=mysqli_num_rows($result);
    if($n>0)
    {
        ?>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

        <table width="100%">
            <?php
            while($rw=mysqli_fetch_array($result))
            {
                ?>
            <tr><td>
                <h5 style="color: red; font-weight: bold;"><?php echo $rw["med_name"];?></h5>
                <p style="font-weight: 500;">
                    Company:- <span><?php echo $rw["company"];?></span></br>
                    price:- <span style="color: chocolate;"><?php echo"Rs."; echo $rw["price"]; echo"/-"?></span><br/>
                    description:- <?php echo $rw["description"];?>
            </p>
                </td>
                <td>
                    <h5 style="color: blue;">Medical Name:- <?php echo $rw["medical_name"];?></h5>
                    <p style="font-weight: 500;">
                    Contact:- <?php echo $rw["contact"];?></br>
                    Address:- <?php echo $rw["address"];?><br><br>
                    
            </p>
                </td>
            </tr>
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
?>