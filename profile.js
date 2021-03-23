$(document).ready(function(){    
       $("#profileform").submit(function(e){
            e.preventDefault();
            let username=$("#username").val();
            let newpassword=$("#newpassword").val();
            $.post("server.php?Operation=profileupdate",{username,newpassword},function(data){
                data=JSON.parse(data);
                $("#para").html(data.message);    
            });
       });
});