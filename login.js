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
            data=JSON.parse(data);
            loggedin=true;
            if(data.status==200)
            {
                window.location.href="home.php"
            }
            else
            {
                $("#para").html(data.message);
            }
            // $("#para").html(data);     
        });
    // }
    
    });
    
});