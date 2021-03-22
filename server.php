<?php
session_start();

$mysqliObject = new mysqli("localhost", "root", "", "php project");

$email = $_REQUEST["Email"];
$password = $_REQUEST["Password"];
$operation = $_REQUEST["Operation"];

if($operation == 'signup'){

        $name = $_REQUEST["Name"];       
        $phone = $_REQUEST["Phone"];
        $mysqliObject->query("Insert into users(name, email, phone, password) values('$name', '$email', '$phone', '$password')");
        if($mysqliObject->affected_rows){
            echo 200;
        }
}else if($operation == 'login')
        {
           // echo "isset has returned this :".isset($email);
           // empty fields validation
            if(empty($email) || empty($password))
            {
                echo 400;
                exit();
            }

          
            $loginData = $mysqliObject->query("select * from users where email= '$email'");
            
            // Unknown user login validation
            if($loginData->num_rows == 0){
                echo 401;
                exit();
            }
            $resultData = $loginData->fetch_assoc();            
            echo $mysqliObject->error;
           
            // 
        // if($email != $resultData['email'])        
        // {
        //      echo  "User doesn't exist";
        // }   
        if($password == $resultData["password"])
        {
            echo 200;
            $_SESSION['name'] = $resultData['name'];
        
        }
        else
        {
            echo 401;
        }
}
// else if($operation == 'recovery'){

//     if(empty($email)){
//         echo 400;
//         exit();
//     }else{

//         $recoveryDataset = $mysqliObject->query("select email from users");

//         $recoveryData = $recoveryDataset->fetch_assoc();

//         if($email == $recoveryData['email']){

//             echo 
            
//         }
//     }
// }

?>