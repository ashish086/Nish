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
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];
    
    if(mysqli_connect_error()){
        die('Connect error'.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else{
        $sql = "INSERT INTO contact (name,email,phone,msg) values ('$name','$email','$phone','$msg')";
        $conn->query($sql);
    }
$conn->close();
   
    $mail = new PHPMailer(true);

    $mail->isSMTP(); 
    $mail->SMTPDebug = 0;                                       
                                            
    $mail->Host  = 'smtp.gmail.com';                        
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'webnishrithafoundation@gmail.com';    //your gmail ID username               
    $mail->Password   = 'wgmgghpwkwtqfznr';    //your gmail password                      
    $mail->SMTPSecure = 'ssl';                                  
    $mail->Port       = 465;   
    $mail->CharSet = "UTF-8";                                 

    $mail->setFrom('webnishrithafoundation@gmail.com', 'Updates from contact form'); //first parameter your username
    $mail->addAddress('webnishrithafoundation@gmail.com');     
    $mail->isHTML(true);                                 
    $mail->Subject = 'Hey, someone just filled contact form';

    $mail->Body = "<!DOCTYPE html>

    <head>
        <title>
            Nishritha foundation
        </title>
    </head>

    <body>
        <p> Name: $name</p>
        <p>Email-ID: $email</p>
        <p>Phone number: $phone</p>
        <p>Message: $msg</p>
        
    </body>
    </html>";

    $mail->send();
    header("Location:home.html#contactus");
    }
    ?>