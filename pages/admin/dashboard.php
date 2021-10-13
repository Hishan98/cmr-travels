<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
    />
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="../../assets/css/light-bootstrap-dashboard.css?v=2.0.1"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="orange"
        data-image="../../assets/img/sidebar-6.jpg"
      >
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="sidebar-wrapper">
          <div class="logo">
            <a
              class="simple-text logo-normal"
              style="font-weight: 500; margin-left: 1.7rem"
            >
              C.M.R Travels
            </a>
          </div>
          <div class="user">
            <div class="photo" style="text-align: center">
              <i
                class="material-icons"
                style="font-size: 18px; margin-top: 0.4rem"
                >person_outline</i
              >
            </div>
            <div class="info">
              <a
                data-toggle="collapse"
                href="#collapseExample"
                class="collapsed"
              >
                <span>Tania Andrew </span>
              </a>
            </div>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="./dashboard.html">
                <i class="material-icons" style="font-size: 30px">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buses.html">
                <i class="material-icons" style="font-size: 30px"
                  >directions_bus</i
                >
                <p>Buses</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./dashboard.html">
                <i class="material-icons" style="font-size: 30px">people_alt</i>
                <p>Passengers</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./dashboard.html">
                <i class="material-icons" style="font-size: 30px">edit_road</i>
                <p>Routes</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./dashboard.html">
                <i class="material-icons" style="font-size: 30px"
                  >airline_seat_recline_normal</i
                >
                <p>Seats</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./dashboard.html">
                <i class="material-icons" style="font-size: 30px"
                  >library_books</i
                >
                <p>Bookings</p>
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
                <button
                  id="minimizeSidebar"
                  class="
                    btn btn-warning btn-fill btn-round btn-icon
                    d-none d-lg-block
                  "
                >
                  <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                  <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                </button>
              </div>
              <a class="navbar-brand" href="#pablo"> Dashboard</a>
            </div>
            <button
              class="navbar-toggler navbar-toggler-right"
              type="button"
              data-toggle="collapse"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-bar burger-lines"></span>
              <span class="navbar-toggler-bar burger-lines"></span>
              <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa fa-cog" style="font-size: 16px"></i>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownMenuLink"
                    style="font-size: 12px"
                  >
                    <a class="dropdown-item" href="#">
                      <i
                        class="fa fa fa-user"
                        style="
                          font-size: 16px;
                          margin-top: 0.3rem;
                          margin-right: 1rem;
                        "
                      ></i>
                      Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <i
                        class="fa fa-sign-out"
                        style="
                          font-size: 16px;
                          margin-top: 0.3rem;
                          margin-right: 1rem;
                        "
                      ></i>
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
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center icon-warning">
                          <i class="fa fa-list text-warning"></i>
                        </div>
                      </div>
                      <div class="col-7">
                        <div class="numbers" style="margin-top: 0.5rem">
                          <p class="card-category">Bookings</p>
                          <h4 class="card-title">500</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <hr />
                    <div class="stats">
                      <i class="fa fa-clock-o"></i> Current
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center icon-warning">
                          <i class="fa fa-bus text-success"></i>
                        </div>
                      </div>
                      <div class="col-7">
                        <div class="numbers" style="margin-top: 0.5rem">
                          <p class="card-category">Buses</p>
                          <h4 class="card-title">1,345</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <hr />
                    <div class="stats">
                      <i class="fa fa-calendar-o"></i> Registered
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center icon-warning">
                          <i class="fa fa-road text-danger"></i>
                        </div>
                      </div>
                      <div class="col-7">
                        <div class="numbers" style="margin-top: 0.5rem">
                          <p class="card-category">Routes</p>
                          <h4 class="card-title">50</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <hr />
                    <div class="stats">
                      <i class="fa fa-clock-o"></i> Current
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center icon-warning">
                          <i class="fa fa-users text-primary"></i>
                        </div>
                      </div>
                      <div class="col-7">
                        <div class="numbers" style="margin-top: 0.5rem">
                          <p class="card-category">Passengers</p>
                          <h4 class="card-title">4000</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <hr />
                    <div class="stats">
                      <i class="fa fa-clock-o"></i> Current
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                  <div class="card-header">
                    <h4 class="card-title">Bookings</h4>
                    <p class="card-category">today</p>
                  </div>
                  <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Salary</th>
                          <th>Country</th>
                          <th>City</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Dakota Rice</td>
                          <td>$36,738</td>
                          <td>Niger</td>
                          <td>Oud-Turnhout</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container">
            <nav>
              <ul class="footer-menu">
                <li>
                  <a href="buses.html"> Buses </a>
                </li>
                <li>
                  <a href="#"> Routes </a>
                </li>
                <li>
                  <a href="#"> Seats </a>
                </li>
                <li>
                  <a href="#"> Profile </a>
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
  <script
    src="../../assets/js/dashboard/core/jquery.3.2.1.min.js"
    type="text/javascript"
  ></script>
  <script
    src="../../assets/js/dashboard/core/popper.min.js"
    type="text/javascript"
  ></script>
  <script
    src="../../assets/js/dashboard/core/bootstrap.min.js"
    type="text/javascript"
  ></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../../assets/js/dashboard/plugins/bootstrap-switch.js"></script>

  <!--  Chartist Plugin  -->
  <script src="../../assets/js/dashboard/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/dashboard/plugins/bootstrap-notify.js"></script>
  <!--  Sweet Alert  -->
  <script
    src="../../assets/js/dashboard/plugins/sweetalert2.min.js"
    type="text/javascript"
  ></script>
  <!--  Tags Input  -->
  <script
    src="../../assets/js/dashboard/plugins/bootstrap-tagsinput.js"
    type="text/javascript"
  ></script>
  <!--  Sliders  -->
  <script
    src="../../assets/js/dashboard/plugins/nouislider.js"
    type="text/javascript"
  ></script>
  <!--  Bootstrap Select  -->
  <script
    src="../../assets/js/dashboard/plugins/bootstrap-selectpicker.js"
    type="text/javascript"
  ></script>
  <!--  jQueryValidate  -->
  <script
    src="../../assets/js/dashboard/plugins/jquery.validate.min.js"
    type="text/javascript"
  ></script>
  <!--  Bootstrap Table Plugin -->
  <script src="../../assets/js/dashboard/plugins/bootstrap-table.js"></script>
  <!--  DataTable Plugin -->
  <script src="../../assets/js/dashboard/plugins/jquery.dataTables.min.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script
    src="../../assets/js/dashboard/light-bootstrap-dashboard.js?v=2.0.1"
    type="text/javascript"
  ></script>
  <!-- Light Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/js/dashboard/demo.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

      demo.showNotification();

      demo.initVectorMap();
    });
  </script>
</html>
