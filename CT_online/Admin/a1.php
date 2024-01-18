
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../includes/css.css">
<script type="text/javascript" src="../bootstrap/jquery.js"></script>
<script>
    $(document).ready(function(e){
        $("#bn1").click(function(){
            $("#callnav").slideToggle();
        });
        $("#n1").click(function(){
            $("#np").hide();
            $("#ns").hide();
            $("#nn").slideToggle();
        });
        $("#n2").click(function(){
            $("#np").hide();
            $("#nn").hide();
            $("#ns").slideToggle();
        });
        $("#n3").click(function(){
            $("#nn").hide();
            $("#ns").hide();
            $("#np").slideToggle();
        });
        
     });
</script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgba(33,33,33,1.00)">
    <a href="#" class="navbar-brand"><img src="../includes/CRAZY THINGS 3.png" height="50px"></a>
    <button class="navbar-toggler" id="bn1">
        <span class="navbar-toggler-icon" style=""></span>
    </button>
    <div class="collapse navbar-collapse" id="callnav">
        <ul class="navbar-nav text-center ml-auto" style="font-weight: bold;">
            <li class="nav-item"><a href="AdminHome.php" class="nav-link" style="color:white;">HOME</a></li>
            
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="n1" style="color:white;">NEW</a>
                <ul class="dropdown-menu text-center" id="nn" style="background-color: rgba(33,33,33,1.00); border: none;">
                    <li><a class="dropdown-item text-light" href="AdminReg.php">NEW ADMIN</a></li>
                    <li><a class="dropdown-item text-light" href="SellerReg.php">NEW SELLER</a></li>
                </ul>
            </li>
            
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="n2" style="color:white;">SHOW</a>
                <ul class="dropdown-menu text-center" id="ns" style="background-color: rgba(33,33,33,1.00); border: none;">
                    <li><a class="dropdown-item text-light" href="showadmin.php">SHOW ADMIN</a></li>
                    <li><a class="dropdown-item text-light" href="showseller.php">SHOW SELLER</a></li>
                </ul>
            </li>
            
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="n3" style="color:white;">Profile</a>
                <ul class="dropdown-menu text-center dropdown-menu-right" id="np" style="background-color: rgba(33,33,33,1.00); border: none;">
                    <li><a class="dropdown-item text-light" href="adminprofile.php">Edit Profile</a></li>
                    <li><a class="dropdown-item text-light" href="adminpass.php">Change Password</a></li>
                    <li><a class="dropdown-item text-light" href="../logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
    <div style=" background: url('../ct photo/np2.jpg'); background-size: 100%; background-repeat: no-repeat; background-color: #FF99CC;">
<p style="background-color: rgba(33,33,33,1.00); height: 30px;margin-left: 5px; border-radius: 0 0 10px 10px; text-align: center; font-weight: bold; padding: 5px; line-height: 15px;" class="navbar-brand text-light">ADMIN</p>
<div class="container-fluid" style="min-height: 500px; background: url('../background/admin2.jpg');  background-size: 100%;">
    