<!DOCTYPE html>
<html lang="en">

<head>
  <link rel='icon' href='../images/favicon.png' type='image/x-icon'>
  <title>Nishritha Foundation Admin</title>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .table td {
   text-align: center;   
}

.center{
    margin: 0 auto;
}
</style>
</head>
<body>
    <?php 
    $conn = mysqli_connect("localhost","root","","nishritha_foundation");
    if(isset($_GET['details'])){
        $id = $_GET['details'];
        $sql = "SELECT * FROM volunteer WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
    }
?>

<div class="container">
    <div class="row justify-content-center mt-3" style="background:#2650a4; padding:auto; color: white;">
        <h3 >Volunteer Details</h3>
    </div>
    <div class="row mt-2">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center">
        <img src="<?= '../'.$row['image']; ?>" style="width:150px;border: 5px solid #2650a4;">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="center">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name:</th>
                    <td><?= $row['first_name']?></td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td><?= $row['last_name']?></td>
                </tr>
                <tr>
                    <th>Age:</th>
                    <td><?= $row['age']?></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td><?= $row['gender']?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?= $row['phone']?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?= $row['email']?></td>
                </tr>
                <tr>
                    <th>No of days volunteer is available:</th>
                    <td><?= $row['volunteer_available']?></td>
                </tr>
                <tr>
                    <th>No of hours each day volunteer can work:</th>
                    <td><?= $row['hours']?></td>
                </tr>
                <tr>
                    <th>Employment Status:</th>
                    <td><?= $row['volunteer_status']?></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><?= $row['address1']," " ,$row['address2']; ?></td>
                </tr>
                <tr>
                    <th>City:</th>
                    <td><?= $row['city']?></td>
                </tr>
                <tr>
                    <th>State:</th>
                    <td><?= $row['state']?></td>
                </tr>
                <tr>
                    <th>Postal code:</th>
                    <td><?= $row['postal_code']?></td>
                </tr>
                <tr>
                    <th>Profile applying for:</th>
                    <td><?= $row['profile']?></td>
                </tr>
                <tr>
                    <th>Previous volunteering experience:</th>
                    <td><?= $row['experience']?></td>
                </tr>
                <tr>
                    <th>From where did volunteer hear about us?</th>
                    <td><?= $row['hear']?></td>
                </tr>
                <tr>
                    <th>Application status:</th>
                    <td><?= $row['application_status']?></td>
                </tr>

            </table>
            </div>
        </div>
    </div>
</div>
