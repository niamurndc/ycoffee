<?php include 'header.php';
include '../models/Product.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Product</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          
        </div>
      </div>
      <?php $id = $_GET['id'];
        $products = new Product;
        $result = $products->getProduct($id);
        foreach($result as $product){
        ?>
      <form method="post" action="productControl.php?id=<?php echo $product['id']; ?>">
        
            <div class="form-group mr-5">
              <label for="name">name</label>
              <input type="text" name="name" id="name" class="form-control" value="<?php echo $product['name'] ?>">
            </div>
            <div class="form-group mr-5">
              <label for="price">price</label>
              <input type="number" name="price" id="price" class="form-control" value="<?php echo $product['price'] ?>">
            </div>
            <div class="form-group mr-5">
              <label for="desc">desc</label>
              <input type="text" name="desc" id="desc" class="form-control" value="<?php echo $product['pdesc'] ?>">
            </div>
            <div class="form-group mr-5">
              <label for="offer">Offer</label>
              <input type="checkbox" name="offer" value="1" id="offer" <?php if($product['offer'] == 0){echo '';}else{echo 'checked'; } ?>>
            </div>
            <input type="submit" value="Order" name="editpro" class="btn btn-success mb-3 ">
          </form>
        <?php } ?>
    </main>

    <?php include 'footer.php'; ?>