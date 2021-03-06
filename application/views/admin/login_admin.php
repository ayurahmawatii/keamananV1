<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SecureOne|Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/fonts/material-icon/css/material-design-iconic-font.min.css'?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
</head>
<body>

    <div class="main">

      <!-- Sing in  Form -->
      <section class="sign-in">
          <div class="container">
              <div class="signin-content">
                  <div class="signin-image">
                      <figure><img src="<?php echo base_url().'assets/images/signin-image.jpg'?>" alt="sing up image"></figure>
                      <a href="<?php echo base_url('login'); ?>" class="signup-image-link">Create an account</a>
                  </div>

                  <div class="signin-form">
                      <h2 class="form-title">Sign in</h2>
                      <form method="POST" class="register-form" id="login-form" action="<?php echo base_url().'/login/auth'?>" >
                          <div class="form-group">
                              <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input type="text" name="username" id="your_name" placeholder="Username"/>
                          </div>
                          <div class="form-group">
                              <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                              <input type="password" name="password" id="your_pass" placeholder="Password"/>
                          </div>
                          <div class="form-group">
                              <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                              <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                          </div>
                          <div class="form-group form-button">
                              <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                          </div>
                      </form>

                </div>
            </div>
          </div>
      </section>
    </div>

    <!-- jQuery-->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Bootsrap -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
