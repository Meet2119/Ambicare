<?php
session_start();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<?php
include("head.php");
if (isset($_SESSION['admin'])) {
?>

    <body>
        <?php
        include("aside.php");
        include("header.php");
        ?>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">


                    <div class="content mt-3">
                        <div class="animated fadeIn">
                            <div class="row">

                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Add Ambulance</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Ambulance Number</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" name="ambulanceNo" placeholder="Enter Ambulance Number" class="form-control" required></div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Driver Id</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" name="did" placeholder="Enter Driver ID" class="form-control" required></div>
                                                </div>



                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Fees</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" name="Fees" placeholder="Enter Fees" class="form-control" required></div>
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-sm" name="action">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </form>
                                        </div>

                                    </div>


                                </div>

                            </div><!-- .animated -->
                        </div><!-- .content -->
                    </div><!-- /#right-panel -->
                    <!-- Right Panel -->

                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->


        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

        <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>

    <?php
    if (isset($_POST['action'])) {
        require("../config/config.php");
        $ambulanceNo = $_POST['ambulanceNo'];
        $did = $_POST['did'];
        $Fees = $_POST['Fees'];
        $query = "INSERT INTO ambulance (did,Fees,ambulanceNumber) VALUES ('$did','$Fees','$ambulanceNo');";
        $rowsAffected = mysqli_query($conn, $query);
        mysqli_close($conn);
        if ($rowsAffected > 0) {
            echo "<p class='message_a'>Ambulance Added!</p>";
        } else {
            echo "Unssuccessful due to " . mysqli_error($conn);
        }
    }
} else {
    header("Location: adminLogin.php");
}
    ?>