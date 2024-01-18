<html>
<title>MED_FINDER</title>
<head>
  
<script  type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<link href="css/bootstrap.css" type="text/css">
<link type="text/css" href="css.css">

<script
    $(document).ready(function(e){
        $("#bn").click(function(){
            $("#callnav").slideToggle();
        });
          
     });
</script>


<body>
<nav class="navbar navbar-expand-md bg-danger navbar-dark">
<a href="index.php" class="navbar-brand text- font-weight-bold" style="color:#FF0;font-size:24px;">Med_Finder</a>

  <button class="navbar-toggler" id="bn"> 
  <span class="navbar-toggler-icon "></span>
   </button>
  <div class="collapse navbar-collapse " id="callnav">
    <ul class="navbar-nav text-center ml-auto" style="font-size:20px;font-weight:600;">
      <li class="nav-item"><a href="userpage.php" class="nav-link">HOME</a></li>
      <li class="nav-item"><a href="generalmedical.php" class="nav-link">MEDICALS</a></li>
       <li class="nav-item"><a href="../logout.php" class="nav-link">LOGOUT</a></li>
    </ul>
  </div>
</nav>
