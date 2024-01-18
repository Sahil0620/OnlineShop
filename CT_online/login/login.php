<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
	  <!--Login Part-->
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" action="../checklogin.php" onSubmit="return B()" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="m1" id="d1" placeholder="Username" />
				<span id="e1" style="margin-left:300px;  color: red; "></span>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="d2" name="m2" placeholder="Password" />
				<span id="e2" style="margin-left:300px;  color: red; "></span>
            </div>
            <input type="submit" value="Login" class="btn solid" name="B1"/>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
			
			<!--Registration Part-->
          <form action="../userReg1.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Name" name="h1"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="h2"/>
            </div>
			<div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Contact" name="h3"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="h4"/>
            </div>
			
            <input type="submit" class="btn" value="Sign up" name="B1"/>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Register to Crazy
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Login to Crazy
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>

  </body>
</html>
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