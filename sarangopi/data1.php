<?php
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $rawPassword = $_POST['password']; 
   $number = $_POST['number'];
   $fname = $_POST['fname'];


if($lname!="" && $fname!="" && $email!="" && $rawPassword!="" && $number!=""){



$con = mysqli_connect('localhost','root','','person');

function is_email_registered($email,$con){
   $email = $con->real_escape_string($email);
   $sql = "SELECT * FROM register WHERE email = '$email'";
   $result = $con->query($sql);
   return $result->num_rows >0; 

}

if(is_email_registered($email,$con)){
   $response = array(
      "message" => "EMAIL ALREADY REGISTER ",
      "success" => false
   );
}
else{


$sql = "INSERT INTO register(fname,lname,email,password,number) VALUES(?,?,?,?,?)";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, 'ssssi', $fname, $lname, $email, $rawPassword, $number);

$result = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($con);
  
$response = array(
   "message" => "PERSON REGISTER DETAILS ADDED SUCCESSFULLY",
   "success" => true
);
}
}

else
{
   $response = array(
      "message" => "PERSON REGISTER DETAILS NOT ADDED ",
      "success" => false
   );
}

echo json_encode($response);

?>
