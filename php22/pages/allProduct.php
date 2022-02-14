<?php include 'pages/includes/header.php'; ?>
<section>
  <div class="container">
      <div class="row">
          <?php foreach ($products as $product) {?>
          <div class="col-md-4 mt-3">
              <div class="card">
                  <img src="<?php echo $product['image']?>" alt="imga1" class="card-img-top" style="height: ">
                  <div class="card-body">
                      <h3 class="card-title"><?php echo $product['name']?></h3>
                      <p class=""><?php echo $product['price']?></p>
                      <p class="text-justify"><?php echo $product['description']?></p>
                      <a href="action.php?pages=product-details&&product_id=" class="btn btn-outline-warning float-right">View</a>
                  </div>
              </div>
          </div>
          <?php } ?>
      </div>
  </div>
</section>


<?php include 'pages/includes/footer.php ';?>

