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
        <script src="signup.js"></script>
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
            background-image: url('dosaback.jpg');
            background-size: 1280px ;

        }
        </style>
    </head>
    <body>
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                <form id="signUpform">
                    Name <input type="text" name="name" id="name" class= "form-control" required><br>
                    Email <input type="email" name="useremail" id="email" class= "form-control" required><br>
                    Phone <input type="number" name="phone" id="phone" class= "form-control" required><br>
                    Password <input type="password" name="pass" id="password" class= "form-control" required><br>
                    Re-type Password <input type="password" name="pass" id="retypepassword" class= "form-control" required><br>                   
                    <a href="index.php" class="btn btn-primary" >Back to login</a> 
                    <input type="submit" value="SignUp" class="btn btn-primary float-right"><br>
                    <a id="para"></a>
                    </form>
                </div>
                </div>
            </div>
            </div>
        
        <script src="" async defer></script>
    </body>
</html>