<head>
<title>CyberSystems - Details</title>
<link rel="icon" href="assets/dragon.png">
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

$temp = trim($_GET['id']);
$cat = trim($_GET['cat']);
if($cat == "Featured"){$cat = "All";}
$productlist = mysqli_query($conn,"SELECT * FROM product WHERE ProductID = '$temp'");
$product = mysqli_fetch_array($productlist);
$pic = "assets\productimages\FinalPictures350x350\\";

?>
<br><br><br><br>
<body>

<h2 align="center"><?php echo $product['Product_Name'];?></h2>

<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-10">
          <div class="card-header">
            <nav class="header-navigation">

              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="store.php">Home</a></li>
                <li class="breadcrumb-item"><a href="productlist.php?cat=<?php echo $cat; ?>"><?php echo $cat; ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $product['Product_Name']; ?></li>
              </ol>

            </nav>
          </div>
          <div class="card-body store-body">
            <div class="product-info">
              <div class="product-gallery">
               
                <div class="product-gallery-featured">
                  <img src="<?php echo $pic.$product['Image']; ?>" alt="">
                </div>
              </div>
              <div class="product-seller-recommended">
                <div class="product-description mb-5">
                  
                  <h2 class="mb-5">Description</h2>
                  <p><?php echo $product['Description']; ?></p>
                </div>
              </div>
            </div>
            <div class="product-payment-details">
              <h4 class="product-title mb-2"><?php echo $product['Product_Name'];?></h4>
              <h2 class="product-price display-4">£ <?php echo $product['Price'];?></h2>
              <p class="mb-0"><i class="fa fa-truck"></i> FREE delivery accross the UK</p>
              <label for="quant">Quantity</label>
              <input type="number" name="quantity" min="1" id="quant" class="form-control mb-5 input-lg" placeholder="Choose the quantity">
              <a href="php scripts/addToCart.php?id= <?php echo $product ['ProductID']?>"><button class="btn btn-primary btn btn-block">Add to Cart</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main><br><br><br><br><br>


<div class="container">

        <hr>

        <!-- Footer -->
        <footer>
			<?php
				include ('footer.php');
			?>
        </footer>

    </div>



</body>

</html>
