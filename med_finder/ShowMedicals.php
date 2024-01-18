<h1>Medical Stores</h1>
<?php 
//Create connection between mysql and php
$conn=mysqli_connect("localhost","root","","med_finder");
if(!$conn)
{
	echo "<h3>Unable to connect</h3>";
	die();
}
$sql="select * from medicaldata";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
	while($rw=mysqli_fetch_array($result))
	{
		$name=$rw["medical_name"];
		$owner=$rw["owner"];
		$lno=$rw["lno"];
		$address=$rw["address"];
		$contact=$rw["contact"];
		$email=$rw["email"];
		?>
		<h3><?php echo $name; ?></h3>
        <p>
        	Owner : <?php echo $owner; ?><br/>
            License Number : <?php echo $lno; ?><br/>
            Address : <?php echo $address; ?><br/>
            Contact : <?php echo $contact; ?><br/>
            Email : <?php echo $email; ?><br/>
        </p>
        
        <form method="post" action="EditMedical.php">
        	<input type="hidden" name="H1" value="<?php echo $email; ?>" />
            <input type="submit" name="B1" value="Edit" />
        </form>
        
        <form method="post" action="DeleteMedical.php">
        	<input type="hidden" name="H1" value="<?php echo $email; ?>" />
            <input type="submit" name="B1" value="Delete" />
        </form>
        
		<?php
	}
}
else
{
	?>
	<h3>No medical in database</h3>
    <h2><a href="AdminReg.php">Add Medical</a></h2>
	<?php
}
?>