<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    </head>


     <body>




<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Large modal</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="container">
  <div class="row d-flex  align-items-center">
    <div class="col-md-0">
      <div class="form d-flex ">
        <div class="image">
        <img src="dosa1.jpg">
        </div>
        <form action="" class="my-form">
          <h4 class="font-weight-bold mb-3">User Login</h4>
          <p class="mdb-color-text">Please fill in the text fields to login</p>
          <!-- Email address -->
          <div class="md-form md-outline">
            <i class="fas fa-envelope prefix"></i>
            <input type="email" id="emailExample" class="form-control">
            <label for="emailExample">E-mail address</label>
          </div>
          <!-- Password -->
          <div class="md-form md-outline">
            <i class="fas fa-lock prefix"></i>
            <input type="password" id="passwordExample" class="form-control">
            <label for="passwordExample">Password</label>
          </div>
          <div class="space">
            <div class="float-right">
              <button class="btn btn-rounded" type="button">Log in</button>
            </div>
          </div>
          <hr>
          <a class="link" href="#!">Forgot password? Click here.</a>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
</div>
        
        <style>


                    body {
                    background:  #f3f2f2; 
                    }
                    .row {
                    height: 70vh;
                    }
                    .form {
                    background:  #ffffff; 
                    border-radius:  4px; 
                    box-shadow:  0px 2px 6px -1px rgba(0,0,0,.12);
                    }
                    .image img {
                    margin-top: 30px;
                    width: 250px;
                    height: auto;
                    border-top-left-radius: 4px;
                    border-bottom-left-radius: 4px;
                    }
                    .my-form {
                    padding: 2.5rem;
                    }
                    .my-form h4 {
                    color: #92aad0;
                    }
                    .my-form p {
                    font-size: .875rem;
                    font-weight: 400;
                    }
                    .btn {
                    background-color: #92aad0;
                    right: 0;
                    }
                    .btn:hover, .btn:active, .btn:focus {
                    color: #fff;
                    }
                    a {
                    bottom: 0;
                    }
                    .space {
                    padding-bottom: 4rem;
                    }
                    .link {
                    font-size: .875rem;
                    float: right;
                    color: #6582B0;
                    }
                    .link:hover, .link:active {
                    color: #426193;
                    }
                    @-webkit-keyframes autofill {
                    to {
                        color: #666;
                        background: transparent; } }

                    @keyframes autofill {
                    to {
                        color: #666;
                        background: transparent; } }

                    input:-webkit-autofill {
                    -webkit-animation-name: autofill;
                    animation-name: autofill;
                    -webkit-animation-fill-mode: both;
                    animation-fill-mode: both; }
                                            </style>
    </body>
</html>