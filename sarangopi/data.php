<?php
$useremail = $_POST['email'];
$userpassword = $_POST['password'];

$con = mysqli_connect('localhost', 'root', '', 'person');
$sql = "SELECT email,password  FROM register WHERE email = ?";

$stmt = mysqli_prepare($con,$sql);
mysqli_stmt_bind_param($stmt,"s",$useremail);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt,$email,$rawpassword);
mysqli_stmt_fetch($stmt); 
mysqli_stmt_close($stmt);
mysqli_close($con);


if($email==$useremail){

if($userpassword==$rawpassword){
    $response = array(
        "message" => "Enter the email & password",
        "success" => false  
    );
} else {  
     $response = array(
        "message" => "Person Login Successful",
        "success" => true    
       
    );  
   }
} else {
    $response = array(
        "message" => "Email not found",
        "success" => false
    );
} 
   

header("content-Type: application/json");
echo json_encode($response);

?>
