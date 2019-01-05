<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CyberSystems - Products</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<link rel="icon" href="assets/dragon.png">
<br><br><br><br>
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
$temp = trim($_GET['input']);
$search = trim($_GET['input'])."%";
$search2 = "%".trim($_GET['input']);
$search3 = "%".trim($_GET['input'])."%";
$productlist = mysqli_query($conn,"SELECT * FROM product WHERE Product_Name LIKE '$search' OR Product_Name LIKE '$search2' OR Product_Name LIKE '$search3' ORDER BY Product_Name");
$pic = "assets\productimages\FinalPictures320x150\\";
?>

<body>

<h2 align="center"> Results for "<?php echo($temp) ?>"</h2>

<div class="container">

              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="store.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">"<?php echo($temp) ?>"</li>
              </ol>
</div>


<div class="container">
<?php while($product = mysqli_fetch_array($productlist)):?>

	<div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
			<h4 align="center"><?php echo $product['Product_Name']; ?></h4>
            <a href="product.php?id=<?php echo $product['ProductID']; ?>&cat=<?php echo $cat; ?>"><img src="<?php echo $pic.$product['Image']; ?>" alt=""></a>
            <div class="caption">
				<p>£ <?php echo $product['Price']; ?></p>

            </div>
			<div class="row">
							<div class="col-md-6">
								
							</div>
							<div class="col-md-6">
								<a href="basket.php" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a></div>
						</div>
        </div><br><br>
    </div>
	
<?php endwhile; ?>
</div>


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
