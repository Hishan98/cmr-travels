<?php
// Start the session
session_start();
if (isset($_SESSION["user_status"]) && $_SESSION["user_status"] != null) {
} else {
  header("Location: sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Reserve</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
  <?php include_once '../components/header-links.php'; ?>
</head>

<body>

  <!-- loader -->
  <div class="loading-overlay">
    <lord-icon src="https://cdn.lordicon.com/dpinvufc.json" trigger="loop" colors="primary:#F5A953,secondary:#08a88a" style="width:100px;height:100px">
    </lord-icon>
  </div>
  <!-- End: loader -->

  <div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="../../assets/img/sidebar-6.jpg">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a class="simple-text logo-normal" style="font-weight: 500; margin-left: 1.7rem">
            C.M.R Travels
          </a>
        </div>
        <div class="user">
          <div class="photo" style="text-align: center">
            <i class="material-icons" style="font-size: 18px; margin-top: 0.4rem">person_outline</i>
          </div>
          <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
              <span><?= $_SESSION["user_fname"] . " " . $_SESSION["user_lname"] ?></span>
            </a>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="bookNow.php">
              <i class="material-icons" style="font-size: 30px">book_online</i>
              <p>Book Now</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="myBookings.php">
              <i class="material-icons" style="font-size: 30px">class</i>
              <p>My Bookings</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buses.php">
              <i class="material-icons" style="font-size: 30px">directions_bus</i>
              <p>Buses</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="routes.php">
              <i class="material-icons" style="font-size: 30px">edit_road</i>
              <p>Routes</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="seats.php">
              <i class="material-icons" style="font-size: 30px">airline_seat_recline_normal</i>
              <p>Seats</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="
                    btn btn-warning btn-fill btn-round btn-icon
                    d-none d-lg-block
                  ">
                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Book Now</a>
          </div>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa fa-cog" style="font-size: 16px"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="font-size: 12px">
                  <a class="dropdown-item" href="profile.php">
                    <i class="fa fa fa-user" style="
                          font-size: 16px;
                          margin-top: 0.3rem;
                          margin-right: 1rem;
                        "></i>
                    Profile
                  </a>
                  <a class="dropdown-item" onclick="signOut()">
                    <i class="fa fa-sign-out" style="
                          font-size: 16px;
                          margin-top: 0.3rem;
                          margin-right: 1rem;
                        "></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">

            <div class="col-md-4 align-container-center">
              <form id="LoginValidation" action="" method="" novalidate="novalidate">
                <div class="card ">
                  <div class="card-header mt-2">
                    <h4 class="card-title text-center">Reservation Form</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group has-label">
                      <label>Route <star class="star">*</star></label>
                      <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="booking_route" name="booking_route" required>
                        <option hidden>Select Route</option>
                        <?php
                        include_once '../../controllers/dbConnection.php';

                        $loadDataSql = "SELECT * FROM route";

                        $loadDataResult = $con->query($loadDataSql);

                        if ($loadDataResult->num_rows > 0) {
                          // output data of each row
                          while ($loadDataRow = $loadDataResult->fetch_assoc()) {
                            $routeId = $loadDataRow["routeId"];
                            $routeTo = $loadDataRow["routeTo"];
                            $routeFrom = $loadDataRow["routeFrom"];
                            $routeATime = $loadDataRow["arrivalTime"];
                            $routeDTime = $loadDataRow["departureTime"];
                            $routePrice = $loadDataRow["price"];

                            $newDTime =  date('h:i a', strtotime($routeDTime));
                            $newATime =  date('h:i a', strtotime($routeATime));

                            echo '
                              <option value="' . $routeId . '">' . $routeFrom . ' to ' . $routeTo . '<b> (' . $newDTime . ' - ' . $newATime . ')</b></option>
                            ';
                          }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group has-label">
                      <label>Bus <star class="star">*</star></label>
                      <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="booking_bus" name="booking_bus" required>
                        <option hidden>Select Bus</option>
                      </select>
                    </div>
                    <div class="form-group has-label">
                      <label>Seat <star class="star">*</star></label>
                      <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="booking_seat" name="booking_seat" required>
                        <option hidden>Select Seat</option>
                      </select>
                    </div>
                    <div class="form-group has-label">
                      <label>Date <star class="star">*</star></label>
                      <input type="text" class="form-control datepicker" placeholder="Date Picker Here" id="booking_date" name="booking_date" required>
                    </div>

                  </div>
                  <div class="card-footer text-center mb-4">
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Reserve Now</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="container">
          <nav>
            <ul class="footer-menu">
              <li>
                <a href="bookNow.php"> Book Now </a>
              </li>
              <li>
                <a href="myBookings.php"> My bookings </a>
              </li>
              <li>
                <a href="buses.php"> Buses </a>
              </li>
              <li>
                <a href="routes.php"> Routes </a>
              </li>
              <li>
                <a href="seats.php"> Seats </a>
              </li>
            </ul>
            <p class="copyright text-center">
              Copyright ©
              <script>
                document.write(new Date().getFullYear());
              </script>
              | C.M.R Travels
            </p>
          </nav>
        </div>
      </footer>
    </div>
  </div>
</body>
<!--   Core JS Files   -->
<script src="../../assets/custom-scripts/common.js" typ="text/javascript"></script>
<script src="../../assets/custom-scripts/booking.js" typ="text/javascript"></script>

<?php include_once '../models/bookings/createBooking.php'; ?>
<?php include_once '../models/bookings/updateBooking.php'; ?>
<?php include_once '../models/bookings/deleteBooking.php'; ?>

<?php include_once '../components/footer-links.php'; ?>

</html>