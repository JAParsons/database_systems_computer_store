<html lang="en">
<head>

  <title>CyberSystems</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 <link rel="icon" href="assets/dragon.png">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
 <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
 <link href="css/table.css" rel="stylesheet" type="text/css">
<?php
	$staff = trim($_SESSION["isStaff"]);
	
	if($staff == "1")
{
	$staff = "staffaccount.php?staff=0";
}
else{
	$staff = "customerAccount.php?staff=1";
}
?>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <nav class="navbar navbar-default navbar-fixed-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="home.php"><i class="fa fa-dragon"></i></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li class="active"><a href="home.php">Home</a></li>
                  <li><a href="store.php">Shop Online</a></li>
                     
                  </li>
               </ul>
               <form class="navbar-form navbar-left" role="search" method="get" action="search.php">
                  <div class="form-group">
                     <input type="text" class="form-control" size="18" placeholder="Search" name="input">
                  </div>
                  <button type="submit" class="btn btn-default" href="search.php?input="><span class="glyphicon glyphicon-search"></span></button>
               </form>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo $staff;?>"><span class="glyphicon glyphicon-user"></span>Account</a></li>
				  <li><a href="php scripts/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
				  <li><a href="basket.php"><span class="glyphicon glyphicon-shopping-cart"></span>Basket</a></li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </nav>
      </div>
   </div>
</div>

</head>


</html>