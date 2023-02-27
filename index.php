<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>Login Page - DarkyGr</title>    
    <link rel="shortcut icon" type="image/png" href="app-assets/images/logo/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/icomoon.css">
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- NEW CSSS -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/new.css">
  </head>

  <body class="vertical-layout vertical-menu 1-column blank-page bg-primary">
    
    <div class="app-content content container-fluid">
      <div class="content-wrapper">        
        <div class="content-body"><section class="flexbox-container">
            <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header no-border">
                        <div class="card-title text-xs-center">
                            <div class="p-1"><img class="logo" src="app-assets/images/logo/logo.png" alt="DarkyGr"></div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span><b>Sing in</b></span></h6>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form class="form-horizontal form-simple" >
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" class="form-control form-control-lg input-lg" id="user-email" placeholder="Email">
                                    <div class="form-control-position">
                                        <i class="icon-head"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="password" class="form-control form-control-lg input-lg" id="user-password" placeholder="Password">
                                    <div class="form-control-position">
                                        <i class="icon-key3"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group row">
                                    <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                        <fieldset>
                                            <input type="checkbox" id="remember-me" class="chk-remember">
                                            <label for="remember-me"> Remember Me</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a class="card-link">Forgot password?</a></div>
                                </fieldset>
                                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="ValidateUser();"><a href="#" style="color:white;"><i class="icon-unlock2"></i> Sing in</a></button>
                            </form>
                        </div>
                    </div>
                    <div id="status_login" class="card-footer">
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <p class="float-sm-left text-xs-center m-0"><a href="" class="card-link">Recover password</a></p>
                            <p class="float-sm-right text-xs-center m-0">New user? <a href="" class="card-link">Sign Up</a></p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
      </div>
    </div>

    <script src="app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/Users.js" type="text/javascript"></script>
  </body>
</html>
