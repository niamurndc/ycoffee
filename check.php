<?php include 'header.php'; 
if($uname == null){
  header('location: login.php');
}
?>
  <!-- container star -->
  <div class="container">
    <h2>Checkout </h2>
  
    <!-- offer div -->
    <div class="alert-success my-3">
      <div class="row p-2">
        <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus possimus consequuntur deleniti quibusdam officiis ratione inventore tempora dignissimos omnis voluptas natus rem magni totam dolores. <strong> Your Orders Grand Total= <?php echo $_GET['tm']; ?></strong></p>
      </div>
    </div>

    <div class="alert-success my-1 p-4">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form method="post" action="homeControl.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="fname" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lname" value="" required>
              </div>
            </div>
    
            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required value="<?php echo $uname; ?>">
              </div>
            </div>
    
            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
            </div>
    
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address1" id="address" placeholder="1234 Main St" required>
            </div>
    
            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
            </div>
    
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" name="contry" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" name="state" id="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
              </div>
            </div>
            <hr class="mb-4">
    
            <h4 class="mb-3">Payment</h4>
    
            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" value="Card" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" value="Card" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" value="Paypal" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-success btn-lg btn-block" name="order" type="submit">Place Order</button>
          </form>
        </div>
      </div>
    </div>
  </div> 

  <?php include 'footer.php'; ?>