 <?php
    session_start();
    ?>
 <!DOCTYPE html>
 <html lang="en">
 <?php if (isset($_SESSION['driver'])) {
        require("../config/config.php");
        $dEmail = $_SESSION['driver'];
        $dQuery = "select * from driver where email = '$dEmail';";
        $dRecords = mysqli_query($conn, $dQuery);
        $dCount = mysqli_num_rows($dRecords);
        if ($dCount > 0) {
            while ($dRow = mysqli_fetch_assoc($dRecords)) {
                $did = $dRow['id'];
            }
        }
    ?>

     <body>
         <?php include("../admin/head.php"); ?>
         <?php include("aside.php"); ?>

         <?php include("header.php"); ?>
         <div class="content mt-3">
             <div class="animated fadeIn">
                 <div class="row">

                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong class="card-title">Inbox</strong>
                             </div>
                             <div class="card-body">
                                 <?php
                                    require("../config/config.php");
                                    if ($conn) {
                                        $query = "Select * from bookings where did = '$did'"; //creating a query
                                        $results = mysqli_query($conn, $query); //executing a query
                                        $records = mysqli_num_rows($results); //get the count of total records obtained by query
                                        $startTable = "<table class='table table-light'><thead><tr><th scope='col'>Sr No</th><th scope='col'>Client name</th><th scope='col'>Pickup Location</th><th scope='col'>Drop Location</th><th scope='col'>Fees</th><th></th></tr></thead><tbody>";
                                        $endTable = "</tbody></table>";


                                        if ($records > 0) {
                                            echo $startTable;
                                            $srNo = 0;

                                            while ($row = mysqli_fetch_assoc($results)) {
                                                $cid = $row['cid'];
                                                $cQuery = "select * from client where id = '$cid'";
                                                $cResults = mysqli_query($conn, $cQuery);
                                                $cCount = mysqli_num_rows($cResults);
                                                if ($cCount > 0) {
                                                    while ($cRow = mysqli_fetch_assoc($cResults)) {
                                                        $clientName = $cRow['name'];
                                                    }
                                                }
                                                $srNo++;
                                                echo "<tr><td>{$srNo}</td><td>{$clientName}</td><td>{$row['pickupL']}</td><td>{$row['dropL']}</td><td>{$row['Fees']}</td><td><a href='aR.php?clientName={$clientName}&pickupL={$row['pickupL']}&dropL={$row['dropL']}&Fees={$row['Fees']}&bid={$row['id']}&did={$did}'>Accept</a></td></tr>";
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




         <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>
         <script src="../admin/vendors/popper.js/dist/umd/popper.min.js"></script>

         <script src="../admin/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
         <script src="../admin/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

         <script src="../admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
         <script src="../admin/assets/js/main.js"></script>



     <?php } else {
        header("location: driverLogin.php");
    } ?>