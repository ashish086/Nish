<!DOCTYPE html>
<html lang="en">

<head>
    <link rel='icon' href='images/favicon.png' type='image/x-icon'>
    <title>Nishritha Foundation</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top main-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" style="background-color: #2650a4;" data-toggle="collapse"
                data-target="#Navbar">
                <span class="fa fa-bars" style="color: white">
                </span>
            </button>
            <div class="center">
                <a class="navbar-brand mt-3" href="./home.html">
                    <img class="logo img-responsive" src="images/LOGO2-01.png" alt="Nishritha Foundation logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto ml-3">
                    <li class="nav-item px-2"><a class="nav-link open-sans menu-links" href="home.html"> Home
                        </a>
                    </li>
                    <li class="nav-item px-2"><a class="nav-link open-sans menu-links" href="about.html">
                            About</a></li>
                    <li class="nav-item active px-2"><a class="nav-link open-sans menu-links" href="contact.php">
                            Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right mt-2">
                    <button type="button" class="btn btn-round-lg btn-lg open-sans"
                        style="background-color:#2650a4;border-radius: 1vh;color: white;">Donate
                        here</button>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="images/volunteerlogo.png" alt="Volunteer-logo" />
                <h3>Volunteer with us</h3>
                <p>“The best way to find yourself is to lose yourself in the service of others.”-<span
                        style="font-style:italic">Mahatma Gandhi</span></p>
            </div>


            <div class="col-md-9 register-right">
                <div class="slidebtn">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1" role="tab"
                            aria-controls="page1" aria-selected="true">1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2" role="tab"
                            aria-controls="page2" aria-selected="false">2</a>
                    </li>
                </ul>
                </div>
                <form action="volunteer.php" method="POST" enctype="multipart/form-data">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="page1" role="tabpanel" aria-labelledby="page1-tab">
                            <h4 class="register-heading">Personal Information</h4>
                            <div class="row register-form">
                                <div class="col-lg-6 col-md-11">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *"
                                            name="first_name" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *"
                                            name="last_name" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Age in years *"
                                            name="age" required/>
                                    </div>
                                    <div class=" form-group">
                                        <select class="form-control" name="volunteer_available" required>
                                            <option class="hidden">Volunteer availability per week
                                            </option>
                                            <option value="Employed">1-2 days</option>
                                            <option value="Self-employed">2-3 days</option>
                                            <option value="Homemaker">3-4 days</option>
                                            <option value="Student">4-5 days</option>
                                            <option value="Retired">5-6 days</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline ml-1">
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline ml-1">
                                                <input type="radio" name="gender" value="female">
                                                <span> Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-11">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *"
                                            name="email" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" class="form-control"
                                            placeholder="Your Phone *" name="phone" required/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="employment_status" required>
                                            <option class="hidden" selected disabled>Employment Status</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Self-employed">Self-employed</option>
                                            <option value="Homemaker">Homemaker</option>
                                            <option value="Student">Student</option>
                                            <option value="Retired">Retired</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="No.of hours each day  *"
                                            name="hours" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Select image:</label>
                                        <input type="file" id="file" name="file" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="page2" role="tabpanel" aria-labelledby="page2-tab">
                            <h3 class="register-heading">Other Information</h3>
                            <div class="row register-form">
                                <div class="col-lg-6 col-md-11">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Street Address Line 1*"
                                            name="address_line1" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Street Address Line 2*"
                                            name="address_line2" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State*" name="state" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City *" name="city" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-11">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Postal Code *"
                                            name="postal_code" required/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="experience" required>
                                            <option class="hidden" selected disabled>Previous Experience</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="profile" required>
                                            <option class="hidden" selected disabled>Volunteer Profile</option>
                                            <option>Fundraising Volunteer</option>
                                            <option>Teaching Volunteer</option>
                                            <option>Managing events</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="hear" required>
                                            <option class="hidden" selected disabled>Where did you hear about us ?
                                            </option>
                                            <option>Website</option>
                                            <option>Social Media</option>
                                            <option>Friend/Family</option>
                                            <option>Email</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <input type="submit" name="submit" class="btnRegister" value="submit" onclick="myFunction()"/>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>

    </div>

    <br />
    <br />
    <div class="linebr">
    </div>

    <section id="volunteer">
        <div class="container">
            <div class="row row-head">
                <div class="col col-md-12">
                    <h1 class="head_h1">Our Volunteers</h1>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, obcaecati?</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center row-cols-1 row-cols-sm-1">
            <?php
              $conn = mysqli_connect("localhost","root","","nishritha_foundation");
              $sql = "SELECT * from volunteer WHERE application_status='Accepted' ";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  $result = $stmt->get_result();
                  
                  if( $result->num_rows > 0){
                      while($row = $result->fetch_assoc()){

            ?>
            <div class="col mt-5 col-md-4 col-sm-6">
                <div class="card" style="height:100%">
                    <img class="rounded-circle" style="margin-left: auto; margin-right: auto; display: block; width:100px; height:100px" src="<?= $row['image']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['first_name']; ?></h5>
                        <h6 class="card-text"><?= $row['profile']; ?></h6>
                        <h6 class="card-text"><?= $row['email']; ?></h6>
                    </div>
                </div>
            </div>

            <?php }} ?> 
        </div>
        <br /> 
    </section>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
     <script>
    function myFunction() {
      Swal.fire({
        icon: 'success',
        title: 'Thank you',
        text: 'We would give reach out to you soon'
      })
    }
  </script>
<!-- Footer -->
    <section class="page-footer blue pt-4">
     <div class="container-fluid">
       <div class="row text-center text-md-left">
  
        <div class="col-md-2 mt-md-0 mt-3">
          <h4>Links</h4>
          <ul class="list-unstyled">
            <li><a href="home.html">Home</a></li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <div class="col-md-4 mb-md-0 mb-3">
          <h4>Our Address</h4>
          <address>
          HAL Old Airport Rd, HAL Airport Area, HAL, Bengaluru, Karnataka 560017<br>
            <i class="fa fa-phone fa-lg"></i> +91 99727 95818<br>
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