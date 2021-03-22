$(document).ready(function(){

    $("#recoveryform").submit(function(){

    var email = $("#email").val();

    var recoveryData= {Email: email, Operation : "recovery"}

    $.post("reset.php", loginData, (data)=>{




    });
    
    });




});