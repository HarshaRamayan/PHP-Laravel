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
                  <script>
                     $(document).ready(function(){
                     $("#searchInput").on("keyup", function() {
                       var value = $(this).val().toLowerCase();
                       $("#list li").filter(function() {
                         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                       });
                     });
                     $("#list li").click(function(el){
                        alert(el.target.parentNode.innerHTML);
                     });
                     });
                  </script>
                  <script src="home.js">
                  </script>
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
                  #leftside, #rightside{
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
                  h2, p{
                    color: white;
                  }
                  .followus{
                    margin-left: 40%;
                    padding: 5px;
                  }
                  .leftsidebox{
                      
                      background-color: saddlebrown; 
                                                                 
                        }
                      /* #up h1, #up{
                        color: white;
                        background-color: saddlebrown;
                      } 
                      .down{
                        background-color: saddlebrown;
                      }  */
                     
                  /* .leftsidebox>*:first-child {
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
                  } */ */
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
                     <!-- Links -->
                     <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item">
                           <h4> <a class="nav-link" href="#">Home</a> </h4>
                           </li>
                           <li class="nav-item">
                            <h4> <a class="nav-link" href="#">Settings</a> </h4>
                           </li> -->
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
                  <div class="d-flex align-items-stretch bg-light" style="height:100%">



                     <div class="p-2 border w-50" id="leftside">
                        
                        
                        <?php
                           echo "<h2>Welcome ". $_SESSION['name'].",</h2>"; 
                           ?>
                        <br>
                      
                        <p>Our Dosa is dosa or dose is a thin pancake or crepe, originating from South India, 
                        made from a fermented batter predominantly consisting of lentils and rice. 
                        We make this batter by rolling it on the mortar and pestle not with a blender!!!!!
                        </p>
                     </div>








                     <div class="p-2 border w-50 flexcontainer" id="rightside">
                        <div class="input-group mb-3">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search">
                           <div class="input-group-append">
                              <button class="btn btn-light" type="submit"><i style="color:saddlebrown" class="fas fa-search"></i></button>
                           </div>
                        </div>
                        <br>
                        <ul class="pl-5 pr-5 list-group" id="list">
                        <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa12.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Pizza Dosa</b><br> Description: A variety of pizza dosa with toppings and sauces<br> Price: $19</div>
                              </div>
                           </li>
                           <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa16.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Set Dosa</b><br> Description: Its a plain 3-set dosa with peanut gravy - onions, carrots<br> Price: $15</div>
                              </div>
                           </li>
                           <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa3.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Rava Dosa</b><br> Description: A crunchy spiced dosa, rava dosa is made using semolina, rice flour and all purpose flour<br> Price: $9</div>
                              </div>                              
                           </li>
                           <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa2.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Paper Dosa</b><br> Description: Paper dosa is a very thin and crunchy form of dosa which is prepared without any masala filling<br> Price: $16</div>
                              </div>                              
                           </li>
                           <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa9.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Masala Dosa</b><br> Description: The basic and simple form of dosa, masala dosa is prepared by mixing urad dal and rice. It has a spicy potato filling. This version of Dosa is crunchy from both the sides and is served with Sambhar and Chutney.<br> Price: $17.5</div>
                              </div>
                           </li>
                           <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa11.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Paneer Dosa</b><br> Description: Nutritious and tasty, Podi Dosa is a wholesome dosa made with flavoursome mix of spices and aromatic herbs<br> Price: $13</div>
                              </div>
                           </li>
                           <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa15.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Egg Dosa</b><br> Description: Made with three different pulses teamed with rice, it is absolutely heavenly. It is served with sambhar, coconut chutney<br> Price: $12.9</div>
                              </div>
                           </li>
                           </li>
                           <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa7.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Mutton Dosa</b><br> Description: It is a crispy dosa lathered with succulent mutton and aromatic spices. The stuffing is aromatic and makes a great filling for a dosa<br> Price: $14.7</div>
                              </div>
                           </li>
                           </li>
                           <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa8.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Moong-Dal Dosa</b><br> Description: This type of dosa never fails to impress! Moong Dal Dosa is a rich and healthy recipe, made using moong and urad dal<br> Price: $17.2</div>
                              </div>
                           </li>
                           </li>
                           <li class="list-group-item">
                              <div class="d-flex">
                                 <img src="Dosa/Dosa10.png" height="100" width="150"> 
                                 <div class="ml-3"> <b>Coconut Dosa</b><br> Description: It is an all time favourite dish for breakfast or dinner.Coconut Dosa is a delicious instant dosa recipe made with dosa batter and coconut<br> Price: $18.4</div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div id="about" class="d-flex justify-content-center align-items-center">
                     Contact us @ Phone : 8079870002 | Email : dosaFactory@gmail.com <div class="followus">Follow-us: <a href="https://www.facebook.com/Dosa-Factory-110445341129781" class="fab fa-facebook">&nbsp;&nbsp;</a><a href="#" class="fab fa-instagram"></a>&nbsp;&nbsp;<a href="#" class="fab fa-twitter"></a></div>
                  </div>
                  
               </body>
            </html>