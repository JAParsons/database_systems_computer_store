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
 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
 <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
 <link href="css/table.css" rel="stylesheet" type="text/css">

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
                     </ul>
				<form class="navbar-form navbar-left" role="search" method="get" action="search.php">
                  <div class="form-group">
                     <input type="text" class="form-control" size="18" placeholder="Search" name="input">
                  </div>
                  <button type="submit" class="btn btn-default" href="search.php?input="><span class="glyphicon glyphicon-search"></span></button>
               </form>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="registerPage.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>
                  <li><a href="loginPage.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
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