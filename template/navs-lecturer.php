<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../../../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../../../css/style.css" />
   
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >QuizRoll</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <!-- <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div> -->
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li>
                  <a class="dropdown-item" href="http://localhost/db-project/auth/">Log out</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
      style="background-image: linear-gradient(#00b09b, #a8ff78);"
    >
      <div class="offcanvas-body p-2 pt-4">
        <nav class="navbar-dark">
        <div class="mb-4 text-center" style="font-size: 5rem; color: cornflowerblue;"><i class="bi bi-person-circle text-light"></i></div>
          <ul class="navbar-nav dark">
            <!-- <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li> -->

            <li >
                <span class="ms-3 text-light"><?php echo "ID: ".$_SESSION['userid']?></span>
            </li>
            <li >
                <span class="ms-3 text-light"><?php echo "Name: ".$_SESSION['usersname']?></span>
            </li>
            <li >
                <span class="ms-3 text-light"><?php echo "Account: ".$_SESSION['usertable']?></span>
            </li>

            <li class="my-2 text-white"><hr class="dropdown-divider" style="height:2px"/></li>


            <li >
              <a href="../../index.php" class="nav-link px-3 ">
                
                <span class="me-2 "><i class="bi bi-speedometer text-light"></i></span>
                <span class="text-light">Dashboard</span>
              </a>
            </li>

            <li class="my-2 text-white"><hr class="dropdown-divider" style="height:2px"/></li>

            <li>
              <div class="small text-light fw-bold text-uppercase px-3 ">
                Panels
              </div>
            </li>

            <li>
              <a
                class="nav-link px-3 active"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-person-badge-fill text-light"></i></span>
                <span class="text-light">Quiz</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">

                  <li>
                    <a href="admin.php" class="nav-link px-3 text-light">
                      <span class="me-2"
                        ><i class="bi bi-person-plus-fill"></i
                      ></span>
                      <span>True false</span>
                    </a>
                  </li>

                  <li>
                    <a href="lecturer.php" class="nav-link px-3 text-light">
                      <span class="me-2"
                        ><i class="bi bi-building"></i
                      ></span>
                      <span>Multiple</span>
                    </a>
                  </li>

                

                </ul>
              </div>
            </li>

            <li>
              <a href="workload.php" class="nav-link px-3 text-light">
                <span class="me-2"><i class="bi bi-card-list"></i></span>
                <span>Assignments</span>
              </a>
            </li>

            <!-- <li class="my-2"><hr class="dropdown-divider bg-light " /></li>

            <li>
              <div class=" small fw-bold text-uppercase px-3 mb-3 text-light">
                Addons
              </div>
            </li>

            <li>
              <a href="#" class="nav-link px-3 text-light">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>

            <li>
              <a href="#" class="nav-link px-3 text-light">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li> -->

          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
     
    </main>
    <script src="../../../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../../../js/jquery-3.5.1.js"></script>
    <script src="../../../js/jquery.dataTables.min.js"></script>
    <script src="../../../js/dataTables.bootstrap5.min.js"></script>
    <script src="../../../js/script.js"></script>
  </body>
</html>
