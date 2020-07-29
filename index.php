<?php include 'header.php'; ?>
  <!-- container star -->
  <div class="container">
    <div class="alert-success mt-3">
      <div class="row">
        <div class="col-md-6 text-center pt-5">
          <P class="pt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui soluta excepturi, consequuntur voluptate minus tempora fugiat dolor aspernatur quas facere.</P>
          <a href="#" class="btn btn-outline-success btn-sm">Learn more</a>
        </div>
        <div class="col-md-6"><img src="img/coffee4.jpg" class="h-img"></div>
      </div>
    </div>

    <div class="alert-success mt-3">
      <div class="row">
        <div class="col-md-6"><img src="img/coffee3.jpg" class="h-img"></div>
        <div class="col-md-6 text-center pt-5">
          <P class="pt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui soluta excepturi, consequuntur voluptate minus tempora fugiat dolor aspernatur quas facere.</P>
          <a href="#" class="btn btn-outline-success btn-sm">Learn more</a>
        </div>
      </div>
    </div>

    <!-- offer div -->
    <div class="alert-success mt-3">
      <div class="row">
        <?php 
        $products = new Product;
        foreach($products->getProductOff('1') as $product){
        ?>
        <div class="col-md-4 p-5">
          <div class="card text-center">
            <img src="img/<?php if($product['cat'] == 'coffee'){echo 'product.jpg';}else{echo 'snacks.jpg';}?>" class="card-img-top" height="240px">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product['name']; ?></h5>
              <p class="card-text"> Offer Price <?php echo $product['price']; ?> TK Only</p>
              <a href="view.php?id=<?php echo $product['id']; ?>" class="btn btn-primary btn-sm">Go Offer</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <div class="alert-success mt-3">
      <div class="row">
        <div class="col-md-6 text-center pt-5">
          <P class="pt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui soluta excepturi, consequuntur voluptate minus tempora fugiat dolor aspernatur quas facere.</P>
          <a href="#" class="btn btn-outline-success btn-sm">Learn more</a>
        </div>
        <div class="col-md-6"><img src="img/coffee1.jpg" class="h-img"></div>
      </div>
    </div>

    <div class="row">
      <div class="bg-success m-3 p-4 text-light text-center">
        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, corrupti cupiditate error sit nam at!</h4><br>
        <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, harum quidem. Odit ipsum rem est voluptatem ducimus incidunt expedita!</h5>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>