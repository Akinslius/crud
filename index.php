<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>
  

    <link rel="stylesheet" href="css/all.min.css">


    <link rel="stylesheet" href="styles.css">

    <!-- <style>
    html,body{
        background:url("A1.jpg");
        background-size: cover;
    
      
    }
    
</style> -->

  </head>
  <body>
    <form action="login.php" method="post">
      <div class="segment">
        <h1>Sign In</h1>
      </div>

      <label>
        <input type="text" placeholder="Email Address" name="Email" required >
      </label>
      <label>
        <input type="password" placeholder="Password" name="Password" required   >
      </label>
      <button class="red" type="submit"> <span class="fa-solid fa-lock" > Login </span> </button>

      <div class="login_with">
        <h5> Login With </h5>
      </div>

      <div class="segment">
        <button class="unit" type="button"> <span class="fa-brands fa-google" > </span> </button>
        <button class="unit" type="button"><i class="fa-brands fa-facebook-f"></i></button>
        <button class="unit" type="button"><i class="fa-brands fa-linkedin-in"></i></button>
      </div>
      


      <div class="fp">
        <a href="#"> <h3>Forget Password?</h3> </a>
        <a href="register.php"> <span> <h3>I don't have an Account</h3> </span> </a>
      </div>
     

      
    </form>
  </body>
</html>
