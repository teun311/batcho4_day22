<?php include "pages/includes/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card-header">
                    <h4>Calculator</h4>
                </div>

                <div class="card card-body">
                    <form action="action.php" method="POST">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Number</label>
                            <div class="col-md-8">
                                <input type="number"  class="form-control" min="2" name="input_number" />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>
                            <div class="col-md-8">
                                <input type="text" value="<?php echo ($result == 1) ? 'prime Number' : 'non prime number'?>" readonly class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-outline-success btn-block" name="primebtn" value="Check Result">
                            </div>
                        </div>

                    </form>
                    <div/>
                </div>
            </div>
</section>

<?php include "pages/includes/footer.php"; ?>
