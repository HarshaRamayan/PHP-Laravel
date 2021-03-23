<?php
session_start();

$mysqliObject = new mysqli("localhost", "root", "", "php project");

$operation = $_REQUEST["Operation"];

if($operation == 'getdosas'){
    $resultset=$mysqliObject->query("select * from dosas");
    $result=[];
    while($row=$resultset->fetch_assoc())
        $result[]=$row;
    echo json_encode(array("status"=>200,"result"=>$result));
    
}
if($operation == 'signup'){
        $email = $_REQUEST["Email"];
        $password = $_REQUEST["Password"];    
        $name = $_REQUEST["Name"];       
        $phone = $_REQUEST["Phone"];
        
        $result=$mysqliObject->query("select * from users where email = '$email'");
        if($result->num_rows==0){
            $mysqliObject->query("Insert into users(name, email, phone, password) values('$name', '$email', '$phone', '$password')");
            if($mysqliObject->affected_rows){
                echo json_encode(array("status"=>200,"message"=>"Registered successfully"));
               
            }
        }
        else
        {
            echo json_encode(array("status"=>500,"message"=>"User already exists!"));
        }

}else if($operation == 'login')
        {
            $email = $_REQUEST["Email"];
            $password = $_REQUEST["Password"];
            
            // echo "isset has returned this :".isset($email);
           // empty fields validation
            if(empty($email) || empty($password))
            {
                echo json_encode(array("status"=>400,"message"=>"Please fill all details"));
                exit();
            }

          
            $loginData = $mysqliObject->query("select * from users where email= '$email'");
            
            // Unknown user login validation
            if($loginData->num_rows == 0){
                echo json_encode(array("status"=>401,"message"=>"No such user exists"));
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
            echo json_encode(array("status"=>200,"message"=>"Logged in successfully"));
            $_SESSION['emailid'] = $email; 
            $_SESSION['name'] = $resultData['name'];
        }
        else
        {
            echo json_encode(array("status"=>401,"message"=>"Invalid credentials given"));
        }
}
else if($operation == 'profileupdate'){
    $email=$_SESSION['emailid'];
    $pass=$_REQUEST['newpassword'];
    $username=$_REQUEST['username'];
    $mysqliObject->query("update users set username='$username',password='$pass' where email='$email'");
    if($mysqliObject->affected_rows){
        $_SESSION['name'] = $_REQUEST['username'];
        echo json_encode(array("status"=>200,"message"=>"Updated Successfully"));
    }
    else
    {
        echo json_encode(array("status"=>500,"message"=>"Error while updating"));
    }
}

?>