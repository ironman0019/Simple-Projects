
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/style.css">
    <title>Login</title>
</head>
<body>

  <section class=" gradient-custom">
    <div class="container py-5 ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

  
              <h2 class="fw-bold mb-2 text-uppercase">Welcome to Emad Drive!</h2>
              <p class="text-white-50 mb-5">Please Login First...</p>
              <form action="./includes/login.inc.php" method="POST">
              <div class="form-outline form-white mb-4">
                <input type="text" name="username" id="typeEmailX" class="form-control form-control-lg" />
                 <label class="form-label" for="typeEmailX">Username</label>
              </div>
  
              <div class="form-outline form-white mb-4">
                <input type="password" name="pwd" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
  
              <p class="small mb-3 pb-lg-2"><a class="text-white-50" href="./view/forgetPass.view.php">Forgot password?</a></p>
  
              <input class="btn btn-outline-light btn-lg px-5" name="submit" type="submit" value="Login">
              </form>
              <div>
                <p class="mt-4">Don't have an account? <a href="./view/signup.view.php" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
 </section>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>