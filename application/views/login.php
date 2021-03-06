<!DOCTYPE html>
<!-- saved from url=(0044)http://innowebs.webege.com/landing-page-new/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shell</title>
    <script src="/js/jquery-1.10.2.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Custom Google Web Font -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- <script src="/js/bootstrap.js"></script> -->
    <link rel="shortcut icon" href="/uploads/casportfavicon.png" type="image/x-icon">
    <link rel="icon" href="/uploads/shell-logo-small.jpg" type="image/x-icon">
</head>

<body>
  <div class="row">

      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img style="padding-left: 30px;" alt="Brand" class="img-responsive" src="/uploads/shell-logo-small.png">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li style="padding-right: 30px;"><a style="cursor:pointer;" data-toggle="modal" data-target="#login" id="loginpopup"><strong>Login</strong></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    
  </div>

  <div class="row" style="margin: 0px;">
    <div class="col-md-12" style="padding: 0px;">
      <div class="intro-header" id="home">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          <li data-target="#carousel-example-generic" data-slide-to="5"></li>
          <li data-target="#carousel-example-generic" data-slide-to="6"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item">
            <img class="img-responsive" src="/uploads/portrait1.jpg" alt="Casport 1">
          </div>
          <div class="item active">
            <img class="img-responsive" src="/uploads/portrait2.jpg" alt="Casport 2">
          </div>
          <div class="item">
            <img class="img-responsive" src="/uploads/portrait3.jpg" alt="Casport 3">
          </div>
          <div class="item">
            <img class="img-responsive" src="/uploads/1.jpg" alt="Casport 4">
          </div>
          <div class="item">
            <img class="img-responsive" src="/uploads/2.jpg" alt="Casport 5">
          </div>
          <div class="item">
            <img class="img-responsive" src="/uploads/3.jpg" alt="Casport 6">
          </div>
          <div class="item">
            <img class="img-responsive" src="/uploads/4.jpg" alt="Casport 7">
          </div>
        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="http://innowebs.webege.com/landing-page-new/#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="http://innowebs.webege.com/landing-page-new/#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
          
          <!-- /.container -->

      </div>
    </div>
  </div>
  <!-- /.intro-header -->
<br>
<hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-1 col-md-offset-1">
                      <img src="/uploads/LogoLeandroDapelloChico.png" class="img-responsive pull-left logoLD">
                    </div>
                    <div class="col-md-10">
                      <p class="copyright text-muted small">Powered By <a href="http://www.LeandroDapello.com" target="_blank">LeandroDapello.com</a></p>
                      <p class="copyright text-muted small">Este sitio esta optimizado para Internet Explorer 10 o superior, FireFox y Google Chrome</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </footer>
<!-- Code for Login Popup -->
  <!-- Modal Log in -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 150px;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <a href="#">
              <span class="glyphicon glyphicon-remove"></span>
            </a>
          </button>
          <h4 class="modal-title" id="myModalLabel1">Login</h4>
        </div>
          <form id="targ" action="<?php echo base_url();?>login" method="POST">
        <div class="modal-body" id="login_details">
          *<span style="font-weight:bold;">Sucursal:</span><br>
            <select id="branch" name="branch" required>
              <option value="0" selected="">Seleccione</option>
              <option value='1694'>1694</option>
              <option value='1420'>1420</option>
              <option value='441'>441</option>
              <option value='1452'>1452</option>
              <option value='1080'>1080</option>
            </select><br><br>
          *<span style="font-weight:bold;">Usuario:</span><br>
          <input type="text" placeholder="username" id="user" name="user" required><br><br>
          *<span style="font-weight:bold;">Password</span><br>
          <input type="password" placeholder="Password" id="password" name="password" required>&nbsp<input type="checkbox" id="showPassword"> Mostrar contrase&ntildea<br>

        </div>
        <div class="modal-footer">
      <input style="float: left" type="submit" id="submitForm" class="btn btn-success" value="Log In"> 
         
         <br><br>
      
      
        </div>
      </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--Modal Login Ends -->
  <!-- End code for Login Popup -->
  <script type="text/javascript">
    $('#showPassword').click(function () {
      if ($(this).is(':checked')) {
        $('#password').attr('type', 'text');
      }else{
        $('#password').attr('type', 'password');
      }
    });

    <?php if ($refused == true) {
      echo "<script>alert('Usuario y/o Contraseña incorrectos')</script>";
    }?>

      (function ($) {
          $.toggleShowPassword = function (options) {
              var settings = $.extend({
                  field: "#password",
                  control: "#toggle_show_password",
              }, options);

              var control = $(settings.control);
              var field = $(settings.field)

              control.bind('click', function () {
                  if (control.is(':checked')) {
                      field.attr('type', 'text');
                  } else {
                      field.attr('type', 'password');
                  }
              })
          };
      }(jQuery));

      function submitRequest () {

        var subReq = document.getElementById('submitForm');
        
        subReq.addEventListener('click', function (event) {
          var branch = document.getElementById('branch').value;
          if (branch == 0) {
            alert('Seleccione una sucursal');
            event.preventDefault();
          }
        });
      }

      window.onload = submitRequest;
    </script>
</body>
</html>