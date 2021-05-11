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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

  /* NAVBAR CSS */
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap');

  
  .main-navbar {
    background-color:  white;
    border-bottom: 1px solid #BBBBBB;
  }

  .menu-links {
    text-transform: uppercase;
    display: inline-block;
    position: relative;
    opacity: 0.75;
}

.menu-links:hover{
  opacity: 1;
}

.open-sans {
    font-family: 'Open Sans', sans-serif;
    font-weight: bolder;
    font-size: large;
    color:#2650a4;
  }

  .logo{
    height: 85px;
    width: auto;
    display:inline-block;
  }

  @media screen and (max-width: 767px){
  .center {
    margin: 0 auto;
  }
}
/* NAVBAR CSS ENDS */
/*FOOTER CSS*/
/***  Footer  ***/
section.page-footer {
  padding-top: 20px;
  background: linear-gradient(138deg, #2650a4 55%, #00c6ff);
  color: #fff;
}

a,
a:hover {
  text-decoration: none;
  color: white;
}

a {
  font-weight: 600;
}

i {
  color: #ffff;
}
     
</style>
</head>
<body>
  <!-- NAVBAR STARTS-->
  <nav class="navbar navbar-expand-md fixed-top main-navbar">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" style="background-color: #2650a4;" data-toggle="collapse"
        data-target="#Navbar">
        <span class="fa fa-bars" style="color: white">
        </span>
      </button>
      <div class="center">
        <a class="navbar-brand mt-3 mr-5" href="home.html">
          <img class="logo img-responsive" src="../images/LOGO2-01.png" alt="Nishritha Foundation logo">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto ml-3">
          <li class="nav-item active px-2"><a class="nav-link open-sans menu-links" href="admin.php"> Volunteer Applications
            </a>
          </li>
          <li class="nav-item px-2"><a class="nav-link open-sans menu-links" href="about.html">
              Contact Inquiry</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- NAVBAR ENDS -->
  <br>
  <br>
  <br>
  <br>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center mt-2">
            <div class="col-md-10 col-sm-12">
            <h4 class="text-center text-dark"> Volunteer applications </h4>
            <hr>
            </div>
        </div>

<!-- VOLUNTEER TABLE STARTS -->

        <div class="row">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12">
            <div style="overflow-x:auto;">
            <table class="table table-responsive-md table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>First Name</th>
                    <th>Email ID</th>
                    <th>Phone no</th>
                    <th>Application Status</th>
                    <th>Action</th>
                  </tr>
                  
                </thead>
                <tbody>
                <?php 
                  $conn = mysqli_connect("localhost","root","","nishritha_foundation");
                  $sql = "SELECT * from volunteer";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  $result = $stmt->get_result();
                  
                  if( $result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                ?>
                  <tr>
                    <td><?= $row['id']; ?></td>
                    <td><img src="<?= '../'.$row['image']; ?>" width=60 height=60></td>
                    <td><?= $row['first_name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['phone']; ?></td>
                    <td><?= $row['application_status']; ?></td>

                    <td>
                    <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2 mt-1" style="font-size: 15px">Details</a> 
                    <a href="action.php?reject=<?= $row['id']; ?>" class="badge badge-danger p-2 mt-1" style="font-size: 15px">Reject</a> 
                    <a href="action.php?accept=<?= $row['id']; ?>" class="badge badge-success p-2 mt-1" style="font-size: 15px">Accept</a>
                    </td>
                </tr>
                      <?php }} ?>
                  
                    </tbody>
                </table>
            </div>
            </div>
            <!-- VOLUNTEER TABLE ENDS -->
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center mt-2">
            <div class="col-md-10 col-sm-12">
              <h4 class="text-center text-dark"> Contact Details </h4>
              <hr>
            </div>
        </div>
        
        <!-- CONTACT FORM DETAILS -->
        <div class="row">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12">
            <div style="overflow-x:auto;">
            <table class="table table-responsive-md table-bordered table-hover">
                <thead>
                  <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                  </tr>
                  
                </thead>
                <tbody>
                <?php 
                  $con=new mysqli("localhost","root","","nishritha_foundation");
                  $sql = "select * from contact";
                  $res = $con->query($sql);
                  if ($res->num_rows > 0) {
                    // output data of each row
                        while($ro = $res->fetch_assoc())
                        {
                ?>
                  <tr>
                    <td><?= $ro['name']; ?></td>
                    <td><?= $ro['email']; ?></td>
                    <td><?= $ro['phone']; ?></td>
                    <td><?= $ro['msg']; ?></td>
                </tr>
                      <?php }} ?>
                  
                    </tbody>
                </table>
            </div>
            </div>
            <!-- CONTACT FORM DETAILS ENDS -->
        </div>
    </div>
  <br />
  <br />

        <!-- Footer -->
<section class="page-footer blue pt-4">
    <div class="container-fluid">
      <div class="row text-center text-md-left">
  
        <div class="col-md-2 mt-md-0 mt-3">
          <h4>Links</h4>
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <div class="col-md-4 mb-md-0 mb-3">
          <h4>Our Address</h4>
          <address>
            121, Clear Water Bay Road<br>
            Clear Water Bay, Kowloon<br>
            HONG KONG<br>
            <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
            <i class="fa fa-envelope fa-lg"></i>: <a href=""> Nishritha Foundation</a>
          </address>
        </div>
  
        <div class="col-md-6 mb-md-0 mb-3 align-self-center">
          <div class="text-center">
            <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i
                class="fa fa-google-plus fa-lg"></i></a>
            <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i
                class="fa fa-facebook fa-lg"></i></a>
            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                class="fa fa-linkedin fa-lg"></i></a>
            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i
                class="fa fa-twitter fa-lg"></i></a>
            <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
            <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
          </div>
        </div>
      </div>
    </div>
  
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="#">Nishritha Foundation</a>
    </div>
  
  </section>

  

</body>
</html>

    
    
































    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</html>