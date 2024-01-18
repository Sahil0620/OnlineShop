

<?php include("g1.php"); ?>

<style>
*
{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
}
.login
{
    min-height: 100px;
    width:500px;
    float: left;
    background-color:whitesmoke;
    margin-left: 350px;
    margin-top: 15px;
    padding-bottom: 0px;
    border-radius: 30px;
    box-shadow: 0 0 20px black;
}
.head
{
    height: 50px;
    width: inherit;
    float: left;
    background-color: #6B6B6B;
    line-height: 50px;
    font-size: 30px;
    font-weight: 700;
    color: white;
    text-align: center;
    border-radius:30px 30px 0 0;
}
.row1
{
   min-height: 40px;
    width: 600px;
    float: left;
    margin-top: 10px;
     
}
.rowb
{
    height: 60px;
    width: 600px;
    float: left;
    margin-top: 15px;
    text-align: center;
}
.s1
{
    height: inherit;
    width: 160px;
    font-size: 24px;
    line-height: 60px;
    padding-left: 40px;
    float: left;
}
.s2
{
    height: inherit;
    line-height: 20px;
    width: 400px;
    box-sizing: 10px;
    float: left;
}
.fld
{
    height: 50px;
    width: 325px;
    border: 1px solid black;
    border-radius: 10px;

}
.btn
{
    height: 50px;
    width: 105px;
    font-size: 26px;
    background-color: #6B6B6B;
    border: none;
    color: white;
    font-weight: 500;
    border-radius: 10px;
}
.fld:hover
{
    box-shadow: 0 0 10px black;
}
.fld:focus
{
    box-shadow: 0 0 10px black;
    outline: none;
}
.btn:hover
{
    background-color: black;
}
</style>


       <form method="post" action="checklogin.php" onSubmit="return B()"><div class="login">
            <div class="head">Login</div>
            <div class="row1">
                <div class="s1">Email</div>
                <div class="s2"><input type="email" name="m1" id="d1" class="fld"></div>
            </div>
           <span id="e1" style="margin-left:300px;  color: red; font-family: arial black;"></span>
            <div class="row1">
                <div class="s1">Password</div>
                <div class="s2"><input type="password" class="fld" id="d2" name="m2"></div>
            </div><span id="e2" style="margin-left:300px;  color: red; font-family: arial black;"></span>
            <div class="rowb">
                <button type="submit" class="btn" name="B1">Login</button>
            </div>
        </div>
    </form>

<script>
    function B()
    {
        var m1,m2,c1,c2,a,b;
        m1=document.getElementById("d1");
        m2=document.getElementById("d2");
        c1=document.getElementById("e1");
        c2=document.getElementById("e2");
        
        a=m1.value;
        b=m2.value;
        
        c1.innerHTML="";
        c2.innerHTML="";
        
        if(a==null||a=="")
            {
                c1.innerHTML="*Enter Email";
                m1.focus();
                return false;
            }
        else if(b==null||b=="")
            {
                c2.innerHTML="*Enter Password";
                m2.focus();
                return false;
            }
    }
</script>
<?php include("g2.php"); ?>
    