<?php 
$conn = mysqli_connect("localhost","root","","nishritha_foundation");

        if(isset($_GET['reject'])){
            $id = $_GET['reject'];
            $sql = "UPDATE volunteer SET application_status='Rejected' WHERE id=$id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
        }

        if(isset($_GET['accept'])){
            $id = $_GET['accept'];
            $sql = "UPDATE volunteer SET application_status='Accepted' WHERE id=$id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            

            
        }


        header('location:admin.php');


    ?>