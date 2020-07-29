<?php 
include 'header.php';
include 'models/Cart.php';

$sid = session_id();

$cart = new Cart;

?>
  <!-- container star -->
  <div class="container">
    <h2>Cart <?php  ?></h2>

    <!-- offer div -->
    <?php $money = 0; foreach($cart->getCart($sid, 0) as $car){ ?>
      <div class="alert-success my-2">
        <div class="row">
          <div class="col-md-1"><img src="img/product.jpg" height="80px"></div>
          <div class="col-md-7 pt-1"><h5><?php echo $car['name']; ?></h5><p><?php echo $car['pdesc']; ?></p></div>
          <div class="col-md-1 pt-3 text-center">Amount: <?php echo $car['amount']; ?></div>
          <div class="col-md-1 pt-4"><?php echo $price = $car['price']; ?> TK</div>
          <div class="col-md-1 pt-4"><a href="homeControl.php?action=delete&id=<?php echo $car['id']; ?>" class="btn btn-success btn-sm">Cancel</a></div>
        </div>
      </div>
    <?php $money = $money + $price; } if($money == 0){echo '<h3 class="text-center text-success">Your Cart is Empty</h3>';} ?>
    

    <div class="alert-success my-3">
      <div class="row pb-2">
        <div class="col-md-7 pt-1"></div>
        <div class="col-md-5 pt-4">
          <p>Total Money = <?php echo $money; ?> TK</p>
          <a href="#" class="btn btn-outline-success rounded-pill mr-3">Continue Shopping</a>
          <a href="check.php?tm=<?php echo $money; ?>" class="btn btn-success rounded-pill">Procede to checkout</a>
        </div>
      </div>
    </div>
  </div> 

  <?php include 'footer.php'; ?>