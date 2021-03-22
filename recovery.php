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
        <script src="recovery.js"></script>
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
                    <h5 class="modal-title" id="exampleModalLabel">Recovery Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                <form id="recoveryform">
                   
                    Email <input type="email" name="useremail" id="email" class= "form-control" required><br>
                    <a id="para"></a> 
                    <input type="submit" name="recovery" value="Reset" class="btn btn-primary">                   
                          
                    <!-- <a href="index.php" class="btn btn-primary" >Back to login</a>  -->              
                    
                    </form>
                </div>
                </div>
            </div>
            </div>
    </body>
</html>

