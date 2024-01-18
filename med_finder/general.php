<html>

    <head>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap/jquery.js"></script>
        
        <script>
            $(document).ready(function(e){
                $("#bn1").click(function(){
                    $("#callnav").slideToggle();
                });
             });
        </script>
        
    </head>

    
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand text-primary font-weight-bold">Med_Finder</a>
            <button class="navbar-toggler" id="bn1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="callnav">
                <ul class="navbar-nav text-center ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">MEDICALS</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">LOGIN</a></li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid" style="min-height: 500px;">
        
        
        </div>
        
        <div class="container-fluid bg-dark" style="min-height: 170px;">
        
        </div>
    </body>
</html>







