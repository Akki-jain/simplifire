<?php
session_start();
if(isset($_SESSION['username']))
{
  $user=$_SESSION['username'];
}
?>
  
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <h4>Simpli<span>fire</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php">Home</a></li>
              <li class="scroll-to-section"><a href="conferences.php">Conferences</a></li>
              <li class="scroll-to-section"><a href="awards.php">Awards</a></li>
              <li class="scroll-to-section"><a href="workshops.php">Workshops</a></li>
              <li class="scroll-to-section"><a href="consultancy.php" >Consultancy</a></li> 
              <!-- <li class="scroll-to-section"><a href="index.php#contact">Contact Us</a></li> -->
              <li class="scroll-to-section">
              <?php if(isset($_SESSION['username']))
                {
                echo " ";
                }
                else
                {
                echo "<a href='sign.php' style='margin-right:-30px;'>Login</a>";
                } ?></li>
                <li>
                <?php if(isset($_SESSION['username']))
                {
                echo "<a href='dashboard.php' style='margin-right:-10px; margin-left:-80px;'>";
                echo "&emsp;&emsp; Hi, ". strtoupper($user);
                }
                else
                {
                echo "";
                } ?></a></a></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="index.php#portfolio">Top Performer</a></div></li> 
              
              


            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->