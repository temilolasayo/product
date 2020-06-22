<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </head>

 <body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid" style="background-color:#000">
	<div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#fff;font-family:montserrat;font-size:20px; padding-left:50px">Zuri Fashion</a>
    </div>
<ul class="nav navbar-nav navbar-right" style="font-family:montserrat">
    <li><a href="#" style="color:#fff">Home</a></li>
    <li><a href="#" style="color:#fff">Women</a></li>
    <li><a href="#" style="color:#fff">Men</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#fff">Collections
        <span class="caret" style="color:#5230DB"></span></a>
      <ul class="dropdown-menu" style="background-color:#000">
        <li><a href="#" style="color:#fff">Shoes</a></li>
        <li><a href="#" style="color:#fff">Bags</a></li>
        <li><a href="#" style="color:#fff">Watches</a></li>                       
      </ul>
    </li>
    <li><a href="#" style="color:#fff">Sales</a></li>
    <li><a href="#" style="color:#fff">Accessories</a></li>
    <li><a href="#" style="color:#fff">About</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search" style="color:#fff"></span> </a></li>
        <li><a href="cart-menu.php" class="btn btn-btn btn-md" style="color:#fff; background-color:#5230DB"><span class="glyphicon glyphicon-shopping-cart"></span> </a></li>
        <li><a href="#" style="color:#fff" > Login</a></li>
      </ul>
	</div>
</nav>

 	<div class="container-fluid" style="background-color:#3c3c3c; color:#fff; margin-top:50px">
 		<h3>CART</h3>
 	</div>

 	<div class="container" style="font-family:montserrat; margin-top:10px">
 		
 		<div class="col-sm-6">
 			<img src="image/handbag.jpg" height="150px" width="150px" class="image-thumbnail" alt="handbag">
 		</div>

 			<div class="col-sm-6">
 	<h3>A brown handbag for women</h3>
 	<ul class="nav nav-pills nav-stacked" style="font-family:montserrat">
 		<p class="text-primary">Price: #3000<p/>
 			<button class="btn btn-default"style="margin-right:50px"><a href="#" ><span class="glyphicon glyphicon-plus"></span>Add item</a></button>
 			<button class="btn btn-default"style="margin-right:50px"><a href="#"><span class="glyphicon glyphicon-minus"></span>Remove item</a></button>
 			<button class="btn btn-danger"style="margin-right:50px"><a href="#" style="color:#fff;"><span class="glyphicon glyphicon-trash"></span>Delete item</a></button>
 			
 		</ul>
 	</div>

 </div>


 	<div class="container" style="font-family:montserrat">
 		
 		<div class="col-sm-6">
 			<img src="image/men-shoe.jpg" height="150px" width="150px" class="image-thumbnail" alt="shoe">
 		</div>

 			<div class="col-sm-6">
 	<h3>A black Italian shoe for men</h3>
 	<ul class="nav nav-pills nav-stacked" style="font-family:montserrat">
 		<p class="text-primary">Price: #6000<p/>
 			<button class="btn btn-default"style="margin-right:50px"><a href="#" ><span class="glyphicon glyphicon-plus"></span>Add item</a></button>
 			<button class="btn btn-default"style="margin-right:50px"><a href="#"><span class="glyphicon glyphicon-minus"></span>Remove item</a></button>
 			<button class="btn btn-danger"style="margin-right:50px"><a href="#" style="color:#fff;"><span class="glyphicon glyphicon-trash"></span>Delete item</a></button>
 			
 		</ul>
 	</div>

 </div>


 	<div class="container" style="font-family:montserrat">
 		
 		<div class="col-sm-6">
 			<img src="image/wrist-watch.jpg" height="150px" width="150px" class="image-thumbnail" alt="wrist-watch">
 			</div>

 	<div class="col-sm-6">
 	<h3>A wristwatch for women</h3>
 	<ul class="nav nav-pills nav-stacked" style="font-family:montserrat">
 		<p class="text-primary">Price: #2500<p/>
 			<button class="btn btn-default"style="margin-right:50px"><a href="#" ><span class="glyphicon glyphicon-plus"></span>Add item</a></button>
 			<button class="btn btn-default"style="margin-right:50px"><a href="#"><span class="glyphicon glyphicon-minus"></span>Remove item</a></button>
 			<button class="btn btn-danger"style="margin-right:50px"><a href="#" style="color:#fff;"><span class="glyphicon glyphicon-trash"></span>Delete item</a></button>
 			
 		</ul>
 	</div>

 </div>

 	<div class="container" style="color:#0099ff">
 		
 		<div class="col-sm-6">
 		<h3 >Total</h3>
 	</div>

 		<div class="col-sm-6">
 		<p id="sum" class="btn btn-btn btn-lg"></p>
 		<strong><script type="text/javascript">
 		var amount1=3000;
 		var amount2= 6000;
 		var amount3=2500;
 		var total=amount1+amount2+amount3;
 		document.getElementById("sum").innerHTML="#"+total;
 		</script>
 		</div>
 		</div>


 		<div class="container">
 			<a href="#" class="btn btn-primary btn-block" >Complete your order</a>
 		</div><br>
<div class="container-fluid" style="background-color:#3c3c3c;  font-family:montserrat;  padding-top:40px">
  
  <div class="row" style="margin-left:30px">
    <div class="col-sm-4">
      <ul class="nav nav-pills nav-stacked">
      <h5><a href="#" style="color:#fff">PAYMENT METHOD</a></h5>
     <p style="color:#fff"> Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris</p>
    </ul>
    <img src="image/card.png" height="35px" width="40px" style="margin-right:10px">
    <img src="image/visa.png" height="35px" width="40px" style="margin:10px">
    <img src="image/mastercard.jpg" height="35px" width="40px" style="margin:10px">
    <img src="image/paypal.png" height="35px" width="40px" style="margin:10px">
    <P style="color:#fff">Secure online payment</p>
    </div>

    <div class="col-sm-4">
      <ul class="nav nav-pills nav-stacked">
      <h5><a href="#" style="color:#fff">SHOPPING GUIDE</a></h5>
      <p><a href="#" style="color:#fff">FAQ</a></p>
      <p><a href="#" style="color:#fff">Shipment</a></p>
      <p><a href="#" style="color:#fff">Returns</a></p>
      <p><a href="#" style="color:#fff">Policies</a></p>
      <p><a href="#" style="color:#fff">Gift cards</a></p>
      <p><a href="#" style="color:#fff">Clothing care</a></p>
      <p><a href="#" style="color:#fff">Purchase conditions</a></p>
    </ul>
    </div>

    <div class="col-sm-4">
      <ul class="nav nav-pills nav-stacked">
      <h5><a href="#" style="color:#fff">COMPANY</a></h5>        
      <p><a href="#" style="color:#fff">About us</a></p>
      <p><a href="#" style="color:#fff">Press</a></p>
      <p><a href="#" style="color:#fff">Our team</a></p>
      <p><a href="#" style="color:#fff">Offices</a></p>
      <p><a href="#" style="color:#fff">Affiliates</a></p>
      <p><a href="#" style="color:#fff">Giveaway</a></p>
      <p><a href="#" style="color:#fff">Contact</a></p>
    </ul>
    </div>

</div>
 </div>

 </body>
 </html>