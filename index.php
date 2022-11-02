<?php include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Simplifire | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    

  </head>

<body>
<?php include 'header.php'?>


  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container" style="margin-top:-100px;">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Welcome to Simplifire</h6>
                <h2>We Make <em>manual work</em> <span>easy</span> and faster.</h2>
                <p>We perform Sorting and Analysis of faculty members and determine the top performer of the department.</p>
                <form id="sample_form" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <input type="file" name="file" class="custom-file-input" id="file" placeholder="Your CSV file..." accept=".csv" style = "display:inline-block; margin-top:20px;" autocomplete="on" required >
                    <input type="text" id="type" placeholder="Type of file..." style = "display:inline-block;">
                    <input class="choose" type="hidden" name="hidden_field" value="1" />
                    <button type="submit" class="main-button" name="import" id="import" value="Import">Upload CSV File</button>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/trophyy.png" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Script to send data to other files -->





  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="assets/images/winner.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="assets/images/service-icon-01.png" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>Data Conversion</h4>
                    <p>Converting your excel sheet data into database.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="assets/images/service-icon-02.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Data filtering and sorting</h4>
                    <p>Allowing you to filter the data according to your needs.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="assets/images/service-icon-03.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Report Generation</h4>
                    <p>Exporting your desired data into a report format.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="assets/images/service-icon-04.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Top Performer Evaulation</h4>
                    <p>Evaluating the top performer of the department.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="assets/images/work.svg" alt="">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading">
            <h2>How<em> does </em>everything<span> work </span>?</h2>
            <!-- <p>We convert the data through PHP and store it in AWS servers. The Python performs verious functions in order to gain the top performer.</p> -->
            <p>Division of Total Activity into Conferences, Awards, Workshops, Consultancy in relation to the faculty members.</p>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="first-bar progress-skill-bar">
                <h4>Conferences</h4>
                <span>45%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="second-bar progress-skill-bar">
                <h4>Awards</h4>
                <span>22%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="third-bar progress-skill-bar">
                <h4>Workshops</h4>
                <span>20%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="fourth-bar progress-skill-bar">
                <h4>Consultancy</h4>
                <span>13%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Let's See <em>our </em> Department's <span>Top Performer</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Dr. Arokia Paul Rajan</h4>
                <p>Cloud Computing Expert</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/firstprize.png" alt="">
                <p>First Position</p>

              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Dr. Smitha Vinod</h4>
                <p>Database and SQL Expert</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/secondprize.png" alt="">
                <p>Second Position</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Dr. Debabrata Samanta</h4>
                <p>Patent and Copywrite Expert</p>
              </div>
              <div class="showed-content">
                <img src="assets/images/thirdprize.png" alt="">
                <p>Third Position</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4>Dr. Parth Pathak</h4>
                <p>PHP and Backend Expert</p>

              </div>
              <div class="showed-content">
                <img src="assets/images/fourthprize.png" alt="">
                <p>Fourth Position</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

<br><br><br>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us any Suggestion or Message.</h2>
            <p>Our team will contact you as soon as we receive your message.</p>
            <div class="phone-info">
              <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="9407080580">9407080580</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="contact.php" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="First Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="lname" id="lname" placeholder="Last Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

 <?php include 'footer.php'?>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>
  <script>

 $(document).ready(function()
 {
    
   $('#sample_form').on('submit', function(event)
   {
    var type = document.getElementById("type").value;
    if(type=="award")
    {
        alert(type+" Uploaded Successfully");
        $('#message').html('');
        event.preventDefault();
        $.ajax({
          url:"awardimport.php",
          method:"POST",
          data: new FormData(this),
          dataType:"json",
          contentType:false,
          cache:false,
          processData:false,
          success:function(data)
          {
            $('#message').html('<div class="alert alert-success">'+data.success+'</div>');
            $('#sample_form')[0].reset();
        }
       })
    }
    else if(type=="seminars")
    {
        alert(type+" Uploaded Successfully");
        $('#message').html('');
        event.preventDefault();
        $.ajax({
          url:"seminarimport.php",
          method:"POST",
          data: new FormData(this),
          dataType:"json",
          contentType:false,
          cache:false,
          processData:false,
          success:function(data)
          {
            $('#message').html('<div class="alert alert-success">'+data.success+'</div>');
            $('#sample_form')[0].reset();
          }
        })
      }
      else
      {
        alert(type+" Uploaded Successfully");
        $('#message').html('');
        event.preventDefault();
        $.ajax({
        url:"import.php",
        method:"POST",
        data: new FormData(this),
        dataType:"json",
        contentType:false,
        cache:false,
        processData:false,
        success:function(data)
        {
            $('#message').html('<div class="alert alert-success">'+data.success+'</div>');
            $('#sample_form')[0].reset();
        }
       })
    }
  });
 });
</script>

</body>
</html>
