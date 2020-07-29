<?php include 'header.php'; ?>
  <!-- container star -->
  <div class="container">

    <!-- offer div -->
    <div class="alert-success mt-3">
      <div class="row">
      <?php 
        $cat = $_GET['cat'];
        $products = new Product;
        foreach($products->getProductCat($cat) as $product){
        ?>
        <div class="col-md-3 p-4">
          <div class="card text-center">
            <img src="img/<?php if($cat == 'coffee'){echo 'product.jpg';}else{echo 'snacks.jpg';}?>" class="card-img-top" height="160px">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product['name']; ?></h5>
              <p class="card-text"> Price <?php echo $product['price']; ?> TK </p>
              <a href="view.php?id=<?php echo $product['id']; ?>" class="btn btn-primary btn-sm">Go Offer</a>
            </div>
          </div>
        </div>
        <?php } ?>
        
        
      </div>
    </div>

    <div class="alert-success mt-3 mb-3">
      <div class="row">
        <div class="col-md-6 text-center pt-5">
          <P class="pt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui soluta excepturi, consequuntur voluptate minus tempora fugiat dolor aspernatur quas facere.</P>
          <a href="#" class="btn btn-outline-success btn-sm">Learn more</a>
        </div>
        <div class="col-md-6"><img src="img/coffee1.jpg" class="h-img"></div>
      </div>
    </div>
  </div> 

  <?php include 'footer.php'; ?>

  
  
</body>
</html>