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


    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="doseh.jpg" alt="Los Angeles" width="900" height="300">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="dosa1.jpg" alt="Chicago" width="900" height="300">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="dose.jpg" alt="New York" width="900" height="300">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>






























               
                    <div class="row vertical-divider" style="margin-left: 500px">
                <div class="col-xs-6">
                <div class="image">
                    <img src="dosa1.jpg">
                    </div>
                
                </div>
                <form>
                <div class="col-xs-6">
                email<input type="text" class= "form-control"><br>
                password<input type="text" class= "form-control">
                </div>
                </form>
                </div>


            

    <div class="container">
      <div class="row vdivide">
        <div class="col-sm-3 text-center">
        <h1><b>DOSA</b><br>
        <b>FACTORY</b></h1>
        <!-- <div class="image">
        <img src="dosa1.jpg">
        </div> -->
        </div>
        <div class="col-sm-3">
        <form>
                <div class="col-xs-6">
                email<input type="text" class= "form-control"><br>
                password<input type="text" class= "form-control">
                </div>
        </form>
        </div>
        <!-- <div class="col-sm-3 text-center"><h1>Three</h1></div>
        <div class="col-sm-3 text-center"><h1>Four</h1></div> -->
      </div>
    </div>


    <div class="container">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-7">
      <div class="form d-flex justify-content-between">
        <div class="image">
          <img src="https://mdbootstrap.com/img/Photos/Others/sidenav2.jpg">
        </div>
        <form action="" class="my-form">
          <h4 class="font-weight-bold mb-3">Log in to your account</h4>
          <p class="mdb-color-text">To log in, please fill in these text fiels with your e-mail address and password.</p>
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

        <style>
                body{
                    margin-top: 50px;
                    
                }
                .row.vertical-divider {
                overflow: hidden;
                }
                .row.vertical-divider > div[class^="col-"] {
                text-align: center;
                padding-bottom: 100px;
                margin-bottom: -100px;
                border-left: 3px solid #F2F7F9;
                border-right: 3px solid #F2F7F9;
                }
                .row.vertical-divider div[class^="col-"]:first-child {
                border-left: none;
                }
                .row.vertical-divider div[class^="col-"]:last-child {
                border-right: none;
                }

                .image img {
                    /* width: 80px;
                    height: auto;
                    border-top-left-radius: 4px;
                    border-bottom-left-radius: 4px; */
                    width: 220px;
                height: auto;
                border-top-left-radius: 4px;
                border-bottom-left-radius: 4px;


                    }

                .row.vdivide [class*='col-']:not(:last-child):after 
                {
                    background: #e0e0e0;
                    width: 2px;
                    content: "";
                    display:block;
                    position: absolute;
                    top:0;
                    bottom: 0;
                    right: 0;
                    min-height: 70px;
                    }
                h1{
                    color: brown;
                }



                body {
                background:  #f3f2f2; 
                }
                .row {
                height: 100vh;
                }
                .form {
                background:  #ffffff; 
                border-radius:  4px; 
                box-shadow:  0px 2px 6px -1px rgba(0,0,0,.12);
                }
                .image img {
                width: 220px;
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