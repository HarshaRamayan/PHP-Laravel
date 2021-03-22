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
        <script src="login.js"></script>
        <style>
        .btn:hover{
            background-color: saddlebrown;
        }
        .btn-primary
        {
            background-color:saddlebrown;
        }
        body{
            color:saddlebrown;
        }
        </style>
        </head>
    <body>
        <!-- <form method="post" class="modal-body" id="modalbody">
                    Username <input type="email" name="user" id="username"><br>
                    Passwoord <input type="password" name="pass" id="password"><br>
                    <input type="submit" value="Submit" class="btn btn-primary">
                    </form> -->
            <!-- Modal -->
           <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
            </button> -->

            <!-- Modal -->
           
            
            <div class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">User Login</h4>
            <button id="closebutton" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
                
            <div class="modal-body">
            
            <div class="row vdivide">
                    
            <div class="col-md-6 text-center">
                    <h1><b>DOSA</b><br>
                    <b>FACTORY</b></h1>
                    <div class="image">
                    <img src="dosa1.jpg">
                    </div>
                    </div>

            <div class="col-md-6">
            <form id="loginform" method="POST">
            
                Email* <input type="email" name="user" id="email" class= "form-control"><br>
                Password* <input type="password" name="pass" id="password" class= "form-control"><br>
                <input type="submit" value="Login" class="btn btn-primary"><br><br>
                <div id="para"></div>
            </form> 
            </div>
            </div>
            </div><br>


            <div class="modal-footer">
                <!-- <a href="recovery.php">Forgot Password?</a> -->
                <a href="signup.php" type="button" class="btn btn-primary">SignUp</a>
            </div>
            </div>
            </div>
            </div>
            



            
          
            <style>
       /* .modal-content {
     background-color: rgba(0,0,0,.0001) !important;
} */
            body {
                /* color:white; */
                background-image: url('doseh.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;  
                background-size: cover;
                }

                .image img {
                    width: 180px;
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
                    color: saddlebrown;
                }
                #loginform{
                    margin-left: 30px;
                }
               

            </style>  

               

    </body>
</html>