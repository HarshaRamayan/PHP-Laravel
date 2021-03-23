<?php
session_start();
?>

<!DOCTYPE html>
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
                  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
                  <script src="profile.js"></script>
                  <style>
                  #leftside{
                    background-color:saddlebrown;
                  
                  }
                  </style>
               </head>
               <style>
                  .bg-dark {
                  background-color: saddlebrown!important;
                  }
                 
                  #name{
                  position: absolute;
                  left: 5%;
                  top: 10%;
                  color: white;
                  }
                  body{
                  height: 100%;
                  border: 1px solid black;
                  margin: 0px;
                  background: saddlebrown;
                  }
                  #leftside{
                  }
                  #rightside{
                  background: saddlebrown;
                  }
                  li{
                  background-color: transparent !important;
                  color: white;
                  }
                  #list{
                  height: 420px;
                  overflow: scroll;
                  }
                  #about{
                  height:50px;
                  background: saddlebrown;
                  color: white;    
                  }
                  h1, p{
                    color: white;
                  }
                  .followus{
                    margin-left: 40%;
                    padding: 5px;
                  }
                  .leftsidebox{
                      display: flex;
                      flex-direction: column;
                      align-items: flex-start;
                      width: 200px; 
                      background-color: saddlebrown; 
                                                                 
                        }
                      #up h1, #up{
                        color: white;
                        background-color: saddlebrown;
                      } 
                      .down{
                        background-color: saddlebrown;
                      } 
                  .leftsidebox>*:first-child {
                              align-self: center;
                              background-color: black;
                              height: 100%;
                          }
                          .leftsidebox .down{
                              align-self: center;
                              background-color: saddlebrown;
                          } 
                 /* #up {
                      background-color: #FFAD77;
                      width: 30%;
                      flex: 0 0 50%;
                    }
                  #down {
                      flex: 0 0 50%;
                    width: 30%;
                    background-color: grey;
                  } */
               </style>
               <body>
                  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                     <!-- Brand/logo -->
                     <a class="navbar-brand" href="#">
                        <img src="df.png" alt="logo" style="width:50px;">
                        <div id="name">
                           <label>
                              <h1>Dosa Factory</h1>
                           </label>
                        </div>
                     </a>
                     <ul class="navbar-nav ml-auto">
                           <li class="nav-item">
                           <h4> <a class="nav-link" href="home.php" ><i class="fas fa-sign-out-alt"></i>Home</a> </h4>
                        </li>
                        <li class="nav-item">
                           <h4> <a class="nav-link" href="profile.php"><i class="fas fa-sign-out-alt"></i>Profile</a> </h4>
                        </li>
                        <li class="nav-item">
                           <h4> <a class="nav-link" href="admin.php"><i class="fas fa-sign-out-alt"></i>Admin</a> </h4>
                        </li>
                        <li class="nav-item">
                           <h4> <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a> </h4>
                        </li>
                     </ul>
                  </nav>
                  <div class="d-flex justify-content-center align-items-center">
                    <form action="upload.php" enctype="multipart/form-data" method="POST">
                        <div class="form-control">
                            <input type="text" name="title" id="title"  placeholder="title" />
                        </div>
                        <div class="form-control">
                            <input type="text" name="description" id="description"  placeholder="description"/>
                        </div>
                        <div class="form-control">
                            <input type="text" name="price" id="price"  placeholder="price"/>
                        </div>
                        <div class="form-control">
                            <input type="file" name="dosaimg" id="dosaimg" />
                        </div>
                        <button class="btn btn-primary">Update</button>
                        <a id="para"></a>
                    </form> 
                  </div>
                  <div id="about" class="d-flex justify-content-center align-items-center">
                     Contact us @ Phone : 8079870002 | Email : dosaFactory@gmail.com <div class="followus">Follow-us: <a href="https://www.facebook.com/Dosa-Factory-110445341129781" class="fab fa-facebook">&nbsp;&nbsp;</a><a href="#" class="fab fa-instagram"></a>&nbsp;&nbsp;<a href="#" class="fab fa-twitter"></a></div>
                  </div>
                  
               </body>
            </html>