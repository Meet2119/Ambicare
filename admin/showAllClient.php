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

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">All Client</strong>
                            </div>
                            <div class="card-body">
                                <?php
                                require("../config/config.php");
                                if ($conn) {
                                    $query = "Select * from client"; //creating a query
                                    $results = mysqli_query($conn, $query); //executing a query
                                    $records = mysqli_num_rows($results); //get the count of total records obtained by query
                                    $startTable = "<b>Total Records - $records</b><table class='table table-light'><thead><tr><th scope='col'>Sr No</th><th scope='col'>Client ID</th><th scope='col'>Name</th><th scope='col'>Email</th><th scope='col'>Contact</th></tr></thead><tbody>";
                                    $endTable = "</tbody></table>";
                                    if ($records > 0) {
                                        echo $startTable;
                                        $srNo = 0;
                                        while ($row = mysqli_fetch_assoc($results)) {
                                            $srNo++;
                                            echo "<tr><td>{$srNo}</td><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['contact']}</td></tr>";
                                        }
                                        echo "${endTable}";
                                    } else {
                                        echo "No records available";
                                    }
                                    mysqli_close($conn);
                                } else {
                                    die("Unable to connect");
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