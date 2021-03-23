<?php
$ext="";
$file="";
$conn=new mysqli("localhost","root","","php project");

    $title = $_REQUEST["title"]; 
    $description = $_REQUEST["description"];
    $price = $_REQUEST["price"];
    $file = $_FILES["dosaimg"];
    // $_FILES = ["myfile"=>["name"=>"Affinity diagram.png","type"=>"image\/png","tmp_name"=>"C:\\xampp\\tmp\\php79E7.tmp","error"=>0,"size"=>121958]];
    // die(json_encode($file));
    checkFileExtension();
    checkFileSize();
    uplodFileToDestination();

function checkFileExtension()
{
    global $ext;
    $filename=$_FILES["dosaimg"]["name"];
    
    $tmparray = explode(".",$filename);
    $ext = strtolower(end($tmparray));
    $extarray=["jpg","jpeg","png"];
    if(!in_array($ext,$extarray))
    {
        echo "Invalid file type given";
        exit();
    }
}
function checkFileSize()
{
   $onemb=1000000;
   if($_FILES["dosaimg"]["size"]>($onemb))
   {
    
       echo $_FILES["dosaimg"]["size"];
        echo "file too large";
        exit();
   }
}
function uplodFileToDestination()
{
   
    global $file,$ext;
    // When set to TRUE, the return string will be 23 characters. Default is FALSE, and the return string will be 13 characters long
    // uniqid gives us time in microseconds   
    $newname = uniqid('',true).".".$ext;
    $filepath = $_FILES["dosaimg"]["tmp_name"];
    $destination="uploads/".$newname;
 
    move_uploaded_file($filepath,$destination);
    insertInTable($destination);
    exit();
}
function insertInTable($location)
{
    global $conn,$title,$description,$price;
    $query = "insert into dosas(title,description,price,imglocation) values('$title','$description','$price','$location')"; 
    $result = $conn->query($query);
    if($conn->affected_rows==1)
    header("Location: home.php");
    else
    echo $conn->error;
}
?>