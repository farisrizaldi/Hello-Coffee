
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello Coffee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg1">

  <div class="container bg-transparent">
    <div class="row bg-transparent">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto bg-transparent">
        <div class="card card-signin my-5 bg-transparent">
          <div class="card-body bg-transparent">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="POST" action="<?= base_url(); ?>Timeline">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Sign in</button>
              <!-- <a href="<?= base_url(); ?>Timeline" class="btn btn-lg btn-primary btn-block text-uppercase ">Sign in</a> -->

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   

</body>
</html>