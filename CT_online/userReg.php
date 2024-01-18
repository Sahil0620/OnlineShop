
<?php include("g1.php");?>
<style>
    .in
    {
        width: 250px;
        border-radius: 10px;
        float: right;
        margin-right: 10px;
    }
    p
    {
        font-family: "Arial"; 
        margin-left: 10px;
    }
</style>
<div class="form-control-plaintext" style="height: auto; width: 450px; border: thick; border-radius: 20px; border-color: black; box-shadow: 0 0 20px black;  margin-left: 20px; background-color:#C5F4F4;" >

<h1 style="color:#25578A;text-align: center;">User Registration</h1>
    <hr style="border:solid; border-color: lightpink;">
<form method="post" action="userReg1.php">
    <p>Name:-<input type="text" name="h1" class="in"></p>
    <p>Gender: <input type="radio" name="h2"> Male <input type="radio" name="h2"> Female <input type="radio" name="h2"> Others </p>
    <p>Date of Birth:-  <input type="date" name="h3"></p>
    <p>Email:- <input type="email" name="h4" class="in"></p>
    <p>Contact:- <input type="text" name="h5" class="in"></p>
    <p>Address:- <input type="text" name="h6" class="in"></p>
    <p>District:- <input type="text" name="h7" class="in"></p>
    <p>State:-<select name="h8">
        <option>Rajasthan</option>
        <option>M.P.</option>
        <option>U.P</option>
        <option>Maharastra</option>
        <option>Delhi</option>
        </select></p>
    <p>Country:- <select name="h9">
        <option>India</option>
        <option>Others</option>
        </select></p>
    <p>pin code:- <input type="text" name="h10" class="in"></p>
    <p>Password:- <input type="text" name="h11" class="in"></p>
    <p>Confirm Password:- <input type="text" name="h12" class="in"></p>
    <button type="submit" name="B1" class="btn-danger" style="margin-left: 180px; border-radius: 10px;  width:100px;  color: aliceblue; ">Register</button>
</form>
    </div>
<?php include("g2.php");?>