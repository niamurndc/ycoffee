<?php include 'header.php'; ?>
<?php include '../models/Cart.php'; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <a href="addpro.php" class="btn btn-outline-info">Add Product</a>
        </div>
      </div>


      <h2>Orders</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Time</th>
              <th>Product Name</th>
              <th>Product Amount</th>
              <th>Username</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <?php $orders = new Cart;  $i = 0;
            foreach($orders->getCartStat(1) as $order) { $i++?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $order['time'] ?></td>
              <td><?php echo $order['name'] ?></td>
              <td><?php echo $order['amount'] ?></td>
              <td><?php echo $order['username'] ?></td>
              <td><?php echo $order['price'] ?></td>
              <td><a href="view.php?id=<?php echo $order['id'] ?>" class="btn btn-info btn-sm">View Order</a></td>
              <td><a href="orderControl.php?action=edit&id=<?php echo $order['id'] ?>" class="btn btn-warning btn-sm"><?php if($order['comp'] == 0){echo 'Process';}else{echo 'Complete';} ?></a></td>
              
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>

<?php include 'footer.php'; ?>