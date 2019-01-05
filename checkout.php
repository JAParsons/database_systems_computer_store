<head>
<link rel="icon" href="assets/dragon.png">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>

body{ 
    margin-top:40px; 
}

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 35px;
  height: 33px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

</style>
<?php
include("config.php");
#include("header.php");

session_start();

if(isset($_SESSION['id'])){
    require_once("headerloggedin.php");
}else{  
    require_once("header.php");
}

$total = trim($_GET['total']);
$cID = trim($_SESSION['id']);
$num = 0;
$str = "";

$sql = "INSERT INTO orders (CustomerID, Total) VALUES ('$cID', '$total')";
?>

<body><br><br><br><br>


<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle" style="background-color: #d0112b; border-color: #d0112b; border-radius: 20%;">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: #d0112b; border-color: #d0112b; border-radius: 20%;">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: #d0112b; border-color: #d0112b; border-radius: 20%;">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3 align="center"> Step 1</h3>
                <div class="form-group">
                    <label class="control-label">Delivery Address</label>
                    <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Delivery Address"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Postcode</label>
                    <input maxlength="8" type="text" required="required" class="form-control" placeholder="Enter Postcode" />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" style="background-color: #d0112b; border-color: #d0112b;">Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3 align="center"> Step 2</h3>
                <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' maxlength="20" type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' maxlength="3" type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' maxlength="2" type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' maxlength="4" type='text'>
              </div>
            </div>
            <!--<div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
              </div>-->
            </div>
            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
                </div>
              </div>
            </div>
          </form>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" style="background-color: #d0112b; border-color: #d0112b;">Confrim Payment</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3 align="center"> Step 3</h3>
                <div class="form-group">
                    <h2 align="center">Thank You! Your Order Is On The Way</h2>
                </div>
				<div class="row text-center"><a href="customerAccount.php?staff=1">
                <button class="btn btn-primary nextBtn btn-lg" type="button" style="background-color: #d0112b; border-color: #d0112b;">Finished!</button>
				</div>
				<?php mysqli_query($conn, $sql); 
					  $sql = "SELECT * FROM customer WHERE CustomerID = '$cID'";
					  $sql = mysqli_query($conn, $sql);
					  $cust = mysqli_fetch_array($sql);
					  $num = $cust['Points'];
					  (string)$total = (int)$total + $num;
					  
					  $sql = "UPDATE customer SET Points = '$total' WHERE CustomerID = '$cID'";
					  mysqli_query($conn, $sql); 
			 
					  unset($_SESSION['cart']);
				
				
				?>
            </div>
        </div>
    </div>
</form>
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

<script>

$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});

</script>

</html>