<?php include 'includes/header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){ ?>
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image'];?>" alt="" class="card-img-top"/>
                    <div class="card-body">
                        <h3>Product Name</h3>
                        <h4>Tk. 1200</h4>
                        <hr/>
                        <a href="" class="btn btn-outline-success">Details</a>
                    </div>
                </div>
            </div>
            } ?>
            

        </div>
    </div>
</section>


<?php include 'includes/footer.php';?>
