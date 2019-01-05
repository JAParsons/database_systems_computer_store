<html lang="en">
<head>
<link rel="icon" href="assets/dragon.png">
</head>

<?php
require_once("config.php");
#include ('header.php');


session_start();

if(isset($_SESSION['id'])){
    require_once("headerloggedin.php");
}else{  
    require_once("header.php");
}



?>
<!--
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">ONLINE STORE</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>	 
    </div>
	
  </div>
</nav>-->
<body>
<div class="jumbotron text-center">
  <h1><a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/home.php" style="color: #ffffff;text-decoration: none;">Cyber <i class="fa fa-dragon"></i> Systems</a></h1> 
  <p>Technology Specialists</p> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Our Company</h2><br>
      <h4>“Cyber Systems” company started as a local family-run store offering computer hardware, peripherals and software. Gradually we have expanded our portfolio and now also offer repair services and computer/equipment hire. Our company has grown into a nationwide business and now has several branches across the United Kingdom. Why not drop-by your local branch and see what we  have to offer, or feel free to browse our online store.</h4><br>
      <p></p>
    </div>
    <div class="col-sm-4">
      <span> <img src="assets\qrresize.png" ></span>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tag logo-small"></span>
      <h4>SHOP ONLINE</h4>
      <p>Not near a local branch? Order online and have your items delivered direct</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4>REPAIRS</h4>
      <p>We provide repairs for PCs, laptops, phones, printers and more...</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-hdd logo-small"></span>
      <h4>HARWARE RENTALS</h4>
      <p>Many of our products can be rented</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-print logo-small"></span>
      <h4>PRINTERS</h4>
      <p>Print photos, leaflets & business cards in-store</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Our staff are certified professionals</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-piggy-bank logo-small"></span>
      <h4>LOYALTY PROGRAM</h4>
      <p>Collect points on every purchase!</p>
    </div>
  </div>
</div>
 
 <div id="about" class="container-fluid">
  <h2>What our customers say</h2>
  </div>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This website is out of this world"<br><span>Buzz Aldrin, Astronaut</span></h4>
      </div>
      <div class="item">
        <h4>"I'd give this site 10/10!"<br><span>Iain Murray, University of Dundee</span></h4>
      </div>
      <div class="item">
        <h4>"Great service both online and in store"<br><span>John Arnott, Regular Customer</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
</div>
	
<br><br>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> 1 Main Street, Dundee, DD2 1EX, UK</p>
      <p><span class="glyphicon glyphicon-phone"></span> +44 7770770767</p>
      <p><span class="glyphicon glyphicon-envelope"></span> cybersystems@dundee.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group"><a href="home.php">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer
<div class="container">

        <hr>

        <!-- Footer -->
        <footer>
			<?php
				include ('footer.php');
			?>
        </footer>

    </div>
</footer>
<br>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>