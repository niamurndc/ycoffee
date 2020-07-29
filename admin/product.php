<?php include 'header.php';

include '../models/Product.php';

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <a href="addpro.php" class="btn btn-info btn-sm">Add Product</a>
        </div>
      </div>


      <h2>Product Table</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Category</th>
              <th>Desc</th>
              <th>Offer</th>
              <th>Price</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $products = new Product;  $i = 0;
            foreach($products->getproducts() as $product) { $i++?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $product['name'] ?></td>
              <td><?php echo $product['cat'] ?></td>
              <td><?php echo $product['pdesc'] ?></td>
              <td><?php echo $product['offer'] ?></td>
              <td><?php echo $product['price']. 'TK'?></td>
              <td><a href="editpro.php?id=<?php echo $product['id'] ?>" class="btn btn-info btn-sm">Edit</a></td>
              <td><a href="productControl.php?action=delete&id=<?php echo $product['id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>

    <?php include 'footer.php'; ?>