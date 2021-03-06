<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="4 aces">
  <meta name="description" content="A platform where People who want to get and contribute ecofriendly and sustainable substitues in our daily life .">
  <meta name="keywords" content="sustainable ways , how to be eco friendly , eco-friendly , ecofriendly , carbon-footprint , carbon-footprint calculator ">
  <meta name="robots" content="index,follow">
  <title>wantECO</title>
  <link rel="icon" type="image/png" href="img/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="app/scss/style.css" >
  <link rel="stylesheet" type="text/css" href="app/scss/edits.css" >
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <style>
    
  </style>
</head>
<body>
  <!-- header -->
  <div id="load"></div>
  <header class="header">
    <div class="overlay has-fade"></div>

    <nav class="container container--pall flex flex-jc-sb flex-ai-c">
      <img src="img/logo.jpeg" width="100px" onclick="{window.location.href='index.php'}" style="cursor: pointer;">
      <!--- menu for responsive(mobile) -->
      <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
        <span></span> 
        <span></span>
        <span></span>
      </a>

      <div class="header__links hide-for-mobile">
        <a href="/wantECO/"> Home</a>
        <a href="?page=about"> About us</a>
        <?php if(isset($_SESSION['id'])){ ?>
          <a href="?process=logout">Log Out</a>
        <?php }else{   ?>
          <a data-toggle="modal" data-target="#login-modal" href="#">Log in</a>
          <a data-toggle="modal" data-target="#signup-modal" href="#">Sign up</a>
        <?php  }  ?>   
      </div>

      <?php if(isset($_SESSION['id'])){ ?>
      <a href="?page=contribute" class="header__cta hide-for-mobile ">
        <i class="user-ico fas fa-2x fa-user-circle"></i>
      </a>
        <?php }else{   ?>   
      <a href="?page=join" class="button header__cta hide-for-mobile ">Why Join</a>
      <?php  }  ?>   

    </nav>

    <div class="header__menu has-fade">
          <a href="?page=about">About us</a>
        <?php if(isset($_SESSION['id'])){ ?>
          <a href="?process=logout">Log Out</a>
        <?php }else{   ?>
          <a data-toggle="modal" data-target="#login-modal" href="#">Log in</a>
          <a data-toggle="modal" data-target="#signup-modal" href="#">Sign up</a>
        <?php  }  ?>
    </div>
  </header>

  <div class="modal fade" id="login-modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalTitleIn">Log In</h5>
                    <button type="button" 
                            style="background: none;" 
                            class="close" 
                            data-dismiss="modal" 
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="alert alert-danger alerts" type="alert" id="alert-login"></div>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="userIn" id="userIn" class="form-control my-auto"
                                    placeholder="Email or Username " autocomplete="off" aria-describedby="helpId">
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" class="my-auto form-control" name="passwordIn" id="passwordIn"
                                    placeholder="Password">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a data-toggle="modal" data-target="#signup-modal" data-dismiss="modal" href="#">
                      <span style="font-size: 13px; margin-right: 13px;">Sign Up Instead</span>
                    </a>
                    <button type="submit" class="btn btn-primary" id="buttonIn">Log In</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

        
    </div>

  <div class="modal fade" id="signup-modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="signup-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Up</h5>
                    <button type="button" 
                            style="background: none;" 
                            class="close" 
                            data-dismiss="modal" 
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="alert alert-danger alerts" type="alert" id="alert-signup"></div>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text"  autocomplete="off" class="form-control my-auto" name="usernameUp" id="usernameUp" placeholder="Enter Username here" autofill="off">
                            </div>
                            <div class="alert alert-warning alerts" type="alert" id="alert-already-exists"></div>
                            <div class="alert alert-success alerts" type="alert" id="alert-available"></div>
                            <div class="input-field">
                                <i class="fas fa-envelope"></i>
                                <input type="email"  autocomplete="off" name="emailUp" id="emailUp" class="form-control my-auto"
                                    placeholder="Enter email ID here" aria-describedby="helpId">
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" class="form-control my-auto" name="passwordUp" id="passwordUp"
                                    placeholder="Password">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a data-toggle="modal" data-target="#login-modal" data-dismiss="modal" href="#">
                      <span style="font-size: 13px; margin-right: 13px;">Log In Instead</span>
                    </a>
                      <button type="submit" class="btn btn-primary" id="buttonUp">Sign Up</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

