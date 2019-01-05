<head>
<link rel="icon" href="assets/dragon.png">
</head>

<?php
session_start();

include("config.php");
#include("header.php");

if(isset($_SESSION['id']))
{
    require_once("headerloggedin.php");
	$redirect = "checkout.php?total=";
}
else 
{  
    require_once("header.php");
	$redirect = "loginPage.php";
}

#var_dump($_SESSION['cart']);

$items = $_SESSION['cart'];
$total = $temp = 0.00;
$str = "";
?>

<body><br><br><br>

    <div class="container">
        <h1 align="center">Your Basket</h1>
     </div>

<div class="container">
	

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th style="width:3%" scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody><?php if(empty($items) == false):?>
						<?php foreach($items as $key=>$id):
							$sql = "SELECT * FROM Product WHERE ProductID = $id";
							$res = mysqli_query($conn, $sql);
							$r = mysqli_fetch_assoc($res);
						?>
                        <tr>						  
                            <td style="max-height:50px; max-width:50px; overflow: hidden"><img src="" > </td>
                            <td><?php echo $r['Product_Name']; ?></td>
							<td>
								<div class="quantity-number-v2 clearfix">
									<div class="quantity-wrapper">
										<input type="number" class="form-control text-center" value="1">							
									</div>
									<div id="stock" class="text-center"></div>
								</div>
							</td>
                            <td class="text-right"><?php echo $r['Price']; $temp = bcadd($r['Price'],'0',2); $total = $total + $temp?></td>
                            <td class="actions">
							<div>
								<button class="btn btn-info btn-sm"><span class="glyphicon glyphicon-refresh"></span></button>
								<a href="php scripts/deleteFromCart.php?id=<?php echo $r['ProductID'];?>"><button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
							</div></td>
                        </tr>
						<?php endforeach; ?>
						<?php endif; ?>
						
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>Total  £<?php echo $total; ?></td>
						</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>            
						
						
						<div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6"><a href="store.php">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right"><a href="<?php echo $redirect; if(isset($_SESSION['id'])) {echo $total;}?>">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
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
    <!-- /.container -->

</body>

</html>
