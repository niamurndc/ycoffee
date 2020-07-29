<?php include 'header.php';

include '../models/Cart.php';

$id = $_GET['id'];

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Order Detials</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <a href="index.php" class="btn btn-info btn-sm">Go Home</a>
        </div>
      </div>

      <?php $products = new Cart;
            foreach($products->getCartId($id) as $cart) {?>
      
        <h3>ID: #<?php echo $cart['id']; ?></h3>
        <p class="bg-dark text-light pl-5">Product Details</p>
        <div class="row">
          <div class="col-md-3 text-right">Product Name :</div>
          <div class="col-md-9 text-left"><h5><?php echo $cart['name']; ?></h5></div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3 text-right">Product Special Description :</div>
          <div class="col-md-9 text-left"><?php echo $cart['pdesc']; ?></div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3 text-right">Product Amount :</div>
          <div class="col-md-9 text-left"><strong><?php echo $cart['amount']; ?></strong></div>
        </div>
        <div class="row">
          <div class="col-md-3 text-right">Total Price :</div>
          <div class="col-md-9 text-left"><strong><?php echo $cart['price']; ?></strong></div>
        </div>
        <div class="row">
          <div class="col-md-3 text-right">Order Time :</div>
          <div class="col-md-9 text-left"><?php echo $cart['time']; ?></div>
        </div>
        <hr>
        <p class="bg-dark text-light pl-5">User Details</p> 
        <div class="row">
          <div class="col-md-3 text-right">Username :</div>
          <div class="col-md-9 text-left"><?php echo $cart['username']; ?></div>
        </div>
        <div class="row">
          <div class="col-md-3 text-right">Full Name :</div>
          <div class="col-md-9 text-left"><?php echo $cart['cname']; ?></div>
        </div>
        <div class="row">
          <div class="col-md-3 text-right">Email :</div>
          <div class="col-md-9 text-left"><?php echo $cart['email']; ?></div>
        </div>
        <hr>
        <p class="bg-dark text-light pl-5">Billing Details</p> 
        <div class="row">
          <div class="col-md-3 text-right">Address :</div>
          <div class="col-md-9 text-left"><?php echo $cart['address']; ?></div>
        </div>
        <div class="row">
          <div class="col-md-3 text-right">Payment Method :</div>
          <div class="col-md-9 text-left"><?php echo $cart['payment']; ?></div>
        </div>
        <hr>
      <?php } ?>
    </main>

    <?php include 'footer.php'; ?>