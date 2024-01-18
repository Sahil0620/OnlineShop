<h1>Change Password</h1>
<form method="post" action="ChangePassword1.php" onSubmit="return P()">
    <p>Email:<input type="text" name="t1"></p>
    <p>Old Password: <input type="text" name="t2"></p>
    <p>New Password: <input type="text" name="t3" id="t3"><span id="n1"></span></p>
    <p>Confirm Password: <input type="text" name="t4" id="t4"><span id="o1"></span></p>
    <input type="submit" name="B1" value="Next">
</form>
<script>
    function P()
    {
        var n,o,n1,o1,a,b;
        n=document.getElementById("t3");
        o=document.getElementById("t4");
        n1=document.getElementById("n1");
        o1=document.getElementById("o1");
        a=n.value;
        b=o.value;
        n1.innerHTML="";
        o1.innerHTML="";
        if(a!=b)
            {
                o1.innerHTML="Not matched with password enter again";
                o.select();
                return false;
            }
    }

</script>