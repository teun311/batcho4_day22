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
                            <label for="" class="col-md-4 col-form-label">First Number</label>
                            <div class="col-md-8">
                                <input type="number"  class="form-control" name="first_number" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Last Number</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="last_number"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Options</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="option" value="odd">ODD Number</label>
                                <label for=""><input type="radio" name="option" checked value="even">Even Number</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>
                            <div class="col-md-8">
                                <input type="text" value="<?php echo isset($result) ? $result : ''?>" readonly class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-outline-success btn-block" name="oddbtn" value="Check Result">
                            </div>
                        </div>

                    </form>
                    <div/>
                </div>
            </div>
</section>


<?php include "pages/includes/footer.php"; ?>
