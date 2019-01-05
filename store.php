<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CyberSystems - Store</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="assets/dragon.png">
	
<br>
</head>



<?php
include("config.php");
#include("header.php");


session_start();

if(isset($_SESSION['id'])){
    require_once("headerloggedin.php");
}else{  
    require_once("headershop.php");
}

$productlist = mysqli_query($conn,"SELECT * FROM product ORDER BY RAND() LIMIT 6");
$pic = "assets\productimages\FinalPictures320x150\\";
?>

<body>
<br><br>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">CyberSystems Online Store</p>
                <div class="list-group">
					<a href="productlist.php?cat=All" class="list-group-item">All</a>
                    <a href="productlist.php?cat=Desktops" class="list-group-item">Desktops</a>
                    <a href="productlist.php?cat=Laptops" class="list-group-item">Laptops and Tablets</a>
                    <a href="productlist.php?cat=Hardware" class="list-group-item">Hardware</a>
					<a href="productlist.php?cat=Monitors" class="list-group-item">Monitors and Displays</a>
					<a href="productlist.php?cat=Peripherals" class="list-group-item">Peripherals</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="assets\featuredproducts\surface3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="assets\featuredproducts\Repair.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="assets\featuredproducts\blade.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
				<br><br>
				
				

                <div class="row">
					<?php while($product = mysqli_fetch_array($productlist)):?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
						<h4 align="center"><?php echo $product['Product_Name']; ?></h4>
							<a href="product.php?id=<?php echo $product['ProductID']; ?>&cat=Featured"><img src="<?php echo $pic.$product['Image']; ?>" alt=""></a>
							<div class="caption">
								<span>£ <?php echo $product['Price']; ?></span>
								<p><?php echo $product['Description']; ?></p>
							</div>
							<div class="row">
								<div class="col-md-6">
									
								</div>
								<div class="col-md-6">
									<a href="php scripts/addToCart.php?id= <?php echo $product ['ProductID']?>" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>
								</div>
							</div><br><br>
						</div>
					</div>
					
					<?php endwhile; ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
			<?php
				include ('footer.php');
			?>
        </footer>

    </div>

   
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
