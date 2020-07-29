<?php include 'header.php';
      include '../models/Attr.php'; 
      include '../models/Value.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Attribute</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          Add Attribute
          <form method="post" action="attrControl.php">
            <div class="form-group mr-5">
              <label for="name">name</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group mr-5">
              <label for="cat">Category</label>
              <select name="cat" id="cat">
                <option value="coffee">Coffee</option>
                <option value="snacks">Snacks</option>
              </select>
            </div>
            <input type="submit" value="Add" name="addattr" class="btn btn-success mb-3">
          </form>
        </div>
        <div class="col-md-6">
          Add Value
          <form method="post" action="attrControl.php">
            <div class="form-group mr-5">
              <label for="cat">Attribute</label>
              <select name="cat" id="cat">
              <?php $attrs = new Attr;
        foreach($attrs->getattrs() as $attr ){?>
                <option value="<?php echo $attr['id'] ?>"><?php echo $attr['name'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group mr-5">
              <label for="name">name</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <input type="submit" value="Add" name="addval" class="btn btn-success mb-3">
          </form>
        </div>
      </div>

      <h2>Section title</h2>
      <div class="table-responsive">
        <?php $attrs = new Attr;
        foreach($attrs->getattrs() as $attr ){?>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th><?php echo $attr['name'] ?> (Category: <?php echo  $attr['cat'] ?>)
            <a href="attrControl.php?action=adelete&id=<?php echo $cat = $attr['id'] ?>" class="btn btn-danger">Delete</a></th>
            </tr>
            <tr>
              <th>Values</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php $value = new Value; 
              foreach($value->getValAtt($cat) as $val){?>
            <tr>
              <td><?php echo $val['name'] ?></td>
              <td><a href="attrControl.php?action=vdelete&id=<?php echo $val['id'] ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } ?>
      </div>

    </main>
    <?php include 'footer.php'; ?>