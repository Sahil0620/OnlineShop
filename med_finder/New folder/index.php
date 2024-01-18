
 <!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="../medical/photos/komal123@gmail.com-admin2.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected Med_find</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="../medical/photos/Free Photo _ Healthcare equipment with wireless keyword and mouse on green background.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
          
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
   
 
 <nav class="navbar navbar-expand-md bg-white navbar-dark" style="display:block;position:r"> <a href="../index.php" class="navbar-brand text- font-weight-bold" style="color:#33F;font-size:24px; ">Med_Finder</a>
 
   
  
</nav>
<span id="s1"></span>
            <div class="title">Login</div>
          <form method="post" action="../checklogin.php" onSubmit="return B()">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required name="m1" id="d1">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required name="m2" id="d2" >
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="B1">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
              
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="../userent1.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" required name="h1">
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required name="h2">
              </div>
              <div class="input-box">
                <i class="fas fa-phone"></i>
                <input type="text" placeholder="Enter your Number" required name="h3">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required name="h4">
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="B1" id="B1">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
