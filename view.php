<?php include 'header.php'; ?>
  <!-- container star -->
  <div class="container">

    <!-- offer div -->
    <?php 
        $cat = $_GET['id'];
        $products = new Product;
        foreach($products->getProduct($cat) as $product){
        ?>
    <div class="alert-success mt-3">
      <div class="row">
        <div class="col-md-4">
          <img src="img/coffee4.jpg" class="h-img">
          <div class="accordion" id="accordionExample">
          <?php $attrs = new Attr; $pcat = $product['cat']; $i = 0;
          foreach($attrs->getAttrCat($pcat) as $attr) { $i++; ?>
            <div class="card ">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left text-success" type="button" data-toggle="collapse" data-target="<?php echo '#collaps'.$i; ?>" aria-expanded="true" aria-controls="collapseOne">
                    <?php echo $attr['name']; ?>
                  </button>
                </h2>
              </div>

              <div id="<?php echo 'collaps'.$i; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <ul class="list-group">
                  <?php $vals = new Value; $aid = $attr['id']; $i = 0;
                        foreach($vals->getValAtt($aid) as $val) { $i++; ?>
                    <li class="list-group-item"><?php echo $val['name']; ?></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>

          <!-- end accordian -->
        </div>
        <div class="col-md-8 px-3 pt-3">
          <h3><?php echo $product['name']; ?></h3>
          <p><?php echo $product['pdesc']; ?></p>
          <h6><?php echo $cat = $product['cat']; ?></h6>
          <h4 id="taka"><?php echo $product['price']; ?> TK</h4>

          <button class="btn btn-outline-success btn-sm mt-4" id="refresh">Refresh</button>

          <form method="post" action="homeControl.php">
            <div class="form-group mr-5">
              <label for="amount">Amount</label>
              <input type="number" name="amount" id="amount" class="form-control" value="1">
            </div>
            <input type="text" name="pname" class="sr-only" value="<?php echo $product['name']; ?>">
            <input type="text" name="price" id="price" class="sr-only" value="<?php echo $product['price']; ?>">
            <div class="form-group mr-5">
              <label for="special">Add Special Item</label>
              <textarea name="special" id="special"  rows="5" class="form-control"></textarea>
            </div>
            <input type="submit" name="addcart" value="Add To Cart" class="btn btn-success mb-3">
          </form>
        </div>
      </div>
    </div>
  </div> 

<?php } include 'footer.php'; ?>