<!doctype html>
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
        
        $("#n2").click(function(){
            $("#np").hide();
            $("#ns").slideToggle();
        });
        $("#n3").click(function(){
            $("#ns").hide();
            $("#np").slideToggle();
        });
        
     });
</script>
</head>

<body>
    
    <nav class="navbar navbar-expand-md navbar-light " style="background-color: rgba(33,33,33,1.00)">
    <a href="#" class="navbar-brand"><img src="../includes/CRAZY THINGS 3.png" height="50px"></a>
    <button class="navbar-toggler" id="bn1">
        <span class="navbar-toggler-icon" style=""></span>
    </button>
    <div class="collapse navbar-collapse" id="callnav">
        <ul class="navbar-nav text-center ml-auto text-light" style="font-weight: bold;">
            <li class="nav-item"><a href="SellerHome.php" class="nav-link text-light">HOME</a></li>
                
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle text-light" id="n2" >Products</a>
                <ul class="dropdown-menu text-center" id="ns" style="background-color: rgba(33,33,33,1.00); border: none; color:white;">
                    <li><a class="dropdown-item text-light" href="productReg.php">Add Products</a></li>
                    <li><a class="dropdown-item text-light" href="showproduct.php">Show My Products</a></li>
                </ul>
            </li>
            
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle text-light" id="n3" >Profile</a>
                <ul class="dropdown-menu text-center dropdown-menu-right" id="np" style="background-color: rgba(33,33,33,1.00); border: none;">
                    <li><a class="dropdown-item text-light" href="profile.php">Edit Profile</a></li>
                    <li><a class="dropdown-item text-light" href="#">Change Password</a></li>
                    <li><a class="dropdown-item text-light" href="../logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
        
    </div>
    <form class="nav-item ml-auto form-check-inline" action="product_search.php" method="post">
            <input type="text" name="s1">
            <input type="submit" name="B1" value="search">
        </form>
</nav>
    <div style=" background: url('../ct photo/np9.jpg'); background-size: 100%; background-repeat: no-repeat; background-color: #FF99CC;">
<p style="background-color: rgba(33,33,33,1.00); height: 30px;margin-left: 5px; border-radius: 0 0 10px 10px; text-align: center; font-weight: bold; padding: 5px; line-height: 15px;" class="navbar-brand text-light">Seller</p>
<div class="container-fluid" style="min-height: 500px; background: url('../background/admin2.jpg');  background-size: 100%;">
    
