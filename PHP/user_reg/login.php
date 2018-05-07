<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="DHLT_LoginPage.css" type="text/css">
  <link rel="stylesheet" href="/CSS/CSS_HomePage/DHLTwilight.css"> </head>

<body class="bg-dark">
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="DHLTwilight.html"><b>DHL Twilight</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav"></ul>
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="UserLandingPage.php"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
      </div>
    </div>
  </nav>
  <div class="py-5" style="background-image: url(&quot;/Images/DHLbackground.png&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div class="card text-white p-5 bg-primary">
            <div class="card-body">
              <h1 class="mb-4">Login</h1>
              <!--<form action="https://formspree.io/YOUREMAILHERE">-->
              <form name="form1" method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="input-group"> <label>Username</label>
                  <input name="username" type="text" id="username"> </div>
                <div class="input-group"> <label> &nbsp;Password</label>
                  <input name="password" type="password" id="password"> </div>
                  <button type="submit" class="btn btn-danger" name="login_user">Login</button>
                    <p>
                      Not yet a member? <a style= color:red href="registration.php">Sign up</a>
  	                 </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-5">
          <h2 class="mb-4 text-secondary">DHL Express Ireland</h2>
          <p class="text-white">DHL Express (Ireland) Ltd Unit 3. Elm Road. Dublin Airport Logistics Park</p>
        </div>
        <div class="p-4 col-md-5">
          <h2 class="mb-4">Contact</h2>
          <p>
            <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>+353 123456789</a>
          </p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>www.dhl.com</a>
          </p>
          <!--<p>-->
          <!--  <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>Unit 3. Elm Road. Dublin Airport Logistics Park</a>-->
          <!--</p>-->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">&copy; Copyright 2018 DHL Express - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>