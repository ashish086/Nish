<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

$host = "localhost";
$dbusername = "id14446204_nishritha_admin";
$dbpassword = "m7ZN9GrX9_YaBnT";
$dbname = "id14446204_nishritha_foundation";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if(isset($_POST['submit'])){
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $age = $_POST['age'];
   $volunteer_available = $_POST['volunteer_available'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $employement_status = $_POST['employment_status'];
   $hours = $_POST['hours'];
   $address1 = $_POST['address_line1'];
   $address2 = $_POST['address_line2'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $postal_code = $_POST['postal_code'];
   $experience = $_POST['experience'];
   $profile = $_POST['profile'];
   $hear = $_POST['hear'];

   

    $name = $_FILES['file']['name'];
    $temp_name  = $_FILES['file']['tmp_name'];
    $location = 'uploads/';  
    $upload = "uploads/".$name;    
    move_uploaded_file($temp_name, $location.$name);
    //$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));

        
    if(mysqli_connect_error()){
        die('Connect error'.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else{
        $sql = "INSERT INTO volunteer (first_name,last_name,email,phone,age,gender,volunteer_available,hours,volunteer_status,address1,address2,state,city,postal_code,profile,experience,hear,image,application_status) values('$first_name','$last_name','$email','$phone','$age','$gender','$volunteer_available','$hours','$employement_status','$address1','$address2','$state','$city','$postal_code','$profile','$experience','$hear','$upload','Pending')";
        $conn->query($sql);
        
}
$conn->close();

$mail = new PHPMailer(true);

$mail->isSMTP(); 
$mail->SMTPDebug = 0;                                       
                                           
$mail->Host  = 'smtp.gmail.com';  						
$mail->SMTPAuth   = true;                                   
$mail->Username   = 'webnishrithafoundation@gmail.com';    //your gmail ID username               
$mail->Password   = 'wgmgghpwkwtqfznr';    //password                      
$mail->SMTPSecure = 'ssl';                                  
$mail->Port       = 465;   
$mail->CharSet = "UTF-8";                                 

$mail->setFrom('webnishrithafoundation@gmail.com', 'Updates from volunteer form'); //first parameter your username
$mail->addAddress('webnishrithafoundation@gmail.com');     
$mail->isHTML(true);                                 
$mail->Subject = 'Hey, someone just filled volunteering form';
$mail -> AddEmbeddedImage(dirname(__FILE__) ."/$location$name","image");

$mail->Body = "<!DOCTYPE html>

<head>
    <title>
        Nishritha foundation
    </title>
</head>

<body>
    <p>First Name: $first_name</p>
    <p>Last Name: $last_name</p>
    <p>Email-ID: $email</p>
    <p>Phone number: $phone</p>
    <p>Age: $age</p>
    <p>Gender: $gender</p>
    <p>No.of days volunteer is available: $volunteer_available</p>
    <p>No.of hours per day volunteer is available: $hours</p>
    <p>Employment Status: $employement_status</p>
    <p>Address: $address1 $address2</p>
    <p>State: $state</p>
    <p>City: $city</p>
    <p>Postal Code: $postal_code</p>
    <p>Previous Experience: $experience</p>
    <p>Volunteer Profile: $profile</p>
    <p>Volunteer heard about Nishritha foundation at: $hear</p>
    <p>Volunteer Image:</p>
    <img style='width:150px; height: 150px' src='cid:image' />
</body>
</html>";

$mail->send();

header("Location:contact.php");


    }


?>