<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<script type="text/javascript" src="../bootstrap/jquery.js"></script>
<script>
    $(document).ready(function(e){
        $("#bn1").click(function(){
            $("#callnav").slideToggle();
        });
        $("#n").click(function(){
            $("#nm").slideToggle();
        });
     });
</script>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a href="#" class="navbar-brand text-primary font-weight-bold">Medical</a>
    <button class="navbar-toggler" id="bn1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="callnav">
        <ul class="navbar-nav text-center ml-auto">
            <li class="nav-item"><a href="#" class="nav-link" id="n1">HOME</a>
            </li>
            </li>
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="n">Medicine</a>
                <ul class="dropdown-menu text-center" id="nm">
                    <li><a class="dropdown-item" href="MedicineReg.php">Add Medicines</a></li>
                    <li><a class="dropdown-item" href="ShowMedicine.php">Show Medicines</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="../general/logout.php" class="nav-link">LOGOUT</a></li>
        </ul>
    </div>
</nav>

 
