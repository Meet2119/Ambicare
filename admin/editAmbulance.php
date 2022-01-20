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

                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Ambulance</strong>
                            </div>
                            <div class="card-body card-block">
                                <?php
                                if (isset($_GET["aid"])) {
                                    require("../config/config.php");
                                    $aid = $_GET["aid"];
                                    $query = "select * from ambulance where aid=$aid;";
                                    $results = mysqli_query($conn, $query);
                                    $numOfRows = mysqli_num_rows($results);
                                    if ($numOfRows > 0) {
                                        while ($row = mysqli_fetch_assoc($results)) {
                                            echo '<form action="updateAmbulance.php" method="post" class="form-horizontal">

                                           <input type="hidden" name="aid" class="form-control" value="' . $row["aid"] . '">
                                           

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Ambulance Number</label></div>
                                                <div class="col-12 col-md-9"><input type="text" name="ambulanceNo" value="' . $row["ambulanceNumber"] . '" placeholder="Enter Ambulance Number" class="form-control" required></div>
                                                
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Driver Id</label></div>
                                                <div class="col-12 col-md-9"><input type="text" name="did" value="' . $row["did"] . '" placeholder="Enter Driver ID" class="form-control" required></div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Fees</label></div>
                                                <div class="col-12 col-md-9"><input type="text" name="Fees" value="' . $row["Fees"] . '" placeholder="Enter Fees" class="form-control" required></div>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-sm" name="action">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </form>';
                                        }
                                        mysqli_close($conn);
                                    } else {
                                        echo "Unsuccessful" . mysqli_error($conn);
                                    }
                                }
                                ?>
                            </div>

                        </div>


                    </div>

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
} else {
    header("Location: adminLogin.php");
}
    ?>