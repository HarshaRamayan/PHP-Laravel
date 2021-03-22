$(document).ready(function(){    
    var loggedin=false;
    $("#loginModal").modal({backdrop: 'static', keyboard: false });

    $("#loginModal").modal('show'); 


    $("#loginform").submit((event)=>{
        event.preventDefault();
        //  if(document.getElementById('email') == null){
        //  print("Please enter the email and password");
        // }else
        // {
            //console.log("Password : " + $("#password"));

        var email = $("#email").val();
        var password = $("#password").val();
        
        var loginData = {Email : email, Password: password, Operation : "login"};

        $.post("server.php", loginData, (data)=>
        {
            loggedin=true;
            if(data==401)
            {
                $("#para").html("Invalid credentials");  
              
            }
            else if(data==200)
            {
                window.location.href="home.php"
            }
            else
            {
                $("#para").html("Please fill in the boxes to login*");  
              
            }
            // $("#para").html(data);  
           
        });
    // }
    
    });
    
});