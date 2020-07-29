<?php include 'header.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Product</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <form method="post" action="productControl.php">
            <div class="form-group mr-5">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group mr-5">
              <label for="capp">Category</label>
              <select name="capp" id="capp" class="form-control">
                <option value="coffee">Coffee</option>
                <option value="snacks">Snacks</option>
              </select>
            </div>
            <div class="form-group mr-5">
              <label for="price">Price</label>
              <input type="number" name="price" id="price" class="form-control">
            </div>
            <div class="form-group mr-5">
              <label for="desc">Desc</label>
              <input type="text" name="desc" id="desc" class="form-control">
            </div>
            <div class="form-group mr-5">
              <label for="offer">Offer</label>
              <input type="checkbox" name="offer" value="1" id="offer">
            </div>
            <input type="submit" name="addpro" value="Order" class="btn btn-success mb-3">
          </form>
    </main>
    <?php include 'footer.php'; ?>