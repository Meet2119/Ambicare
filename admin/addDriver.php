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
                                            <strong>Add Driver</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Name</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" name="name" placeholder="Enter Name" class="form-control" required></div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" name="email" placeholder="Enter Email" class="form-control" required></div>
                                                </div>



                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Contact</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" name="contact" placeholder="Enter Contact" class="form-control" required></div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Password</label></div>
                                                    <div class="col-12 col-md-9"><input type="password" name="pwd" placeholder="Enter Password" class="form-control" required></div>
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
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $query = "INSERT INTO driver (name,email,contact,password) VALUES ('$name','$email','$contact','$pwd');";
        $rowsAffected = mysqli_query($conn, $query);
        mysqli_close($conn);
        if ($rowsAffected > 0) {
            echo "<p class='message_a'>Driver Added!</p>";
        } else {
            echo "Unssuccessful due to " . mysqli_error($conn);
        }
    }
} else {
    header("Location: adminLogin.php");
}
    ?>