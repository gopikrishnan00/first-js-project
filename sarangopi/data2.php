<?php
   /*$lname = $_POST['lname'];
   $email = $_POST['email'];
   $rawPassword = $_POST['password']; 
   $number = $_POST['number'];
   $fname = $_POST['fname'];


$con = mysqli_connect('localhost','root','','person');

$sql = "UPDATE register SET fname = $fname,lname = $lname, password = $rawPassword, number = $number WHERE email ='$email'";
$stmt = mysqli_prepare($sql,$con);
mysqli_stmt_bind_param($stmt, 'ssssi', $fname, $lname, $email, $rawPassword, $number);
$result = mysqli_stmt_execute($stmt);


if($result){
  $response = array(
    "message" => "update successfuly",
    "success" => true
  );
}else{
  $response = array(
    "message" => "update not added",
    "success" => false
  );
}


mysqli_stmt_close($stmt);
mysqli_close($con);

header("content-Type: application/json");
json_encode($response);*/


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "person";




$fname = $_POST['fname']; 
$email = $_POST['email'];    
$number = $_POST['number']; 
$rawPassword = $_POST['password'];
$lname = $_POST['lname']; 

$con = new mysqli('localhost','root','','person');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = ("UPDATE register SET fname = '$fname',lname = '$lname',number = '$number',password = '$rawPassword' WHERE email='$email'");

if ($con->query($sql) === TRUE) {
    $response = array(
        "message" => "successfuly",
        "success" => true
    );
} else {
    $response = array(
        "message" => "unsuccessfuly",
        "success" => false
    );
}

$conn->close();

echo json_encode($response);

?>