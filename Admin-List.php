<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="AdminSidebar-style.css">
  </head>
  <body>
    <div class="d-flex">

    <!--Side bar-->
      <aside id="sidebar" class="sidebar-toggle">
        <div class="sidebar-logo">
          <a href="Admin-Sidebar.php">Admin Dashboard</a>
        </div>
        <!--sidebar nav-->
        <ul class="sidebar-nav p-0">

        <li class="sidebar-header">
            Tools and Components
          </li>

          <li class="sidebar-item">
            <a href="Admin-Sidebar.php" class="sidebar-link">
            <i class='bx bxs-home'></i>
              <span>Home</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="" class="sidebar-link">
            <i class='bx bx-task' ></i>
              <span>Tasks</span>
            </a>
          </li>

          <li class="sidebar-header">
            Pages
          </li>

          <li class="sidebar-items">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth"
             aria-expanded="true" aria-controls="#auth">
             <i class='bx bx-list-ul'></i>
            <span>Associations</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                <i class='bx bxs-flag-alt' ></i>
                    <span>Clubs</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <i class="lni lni-user-multiple-4"></i>
                    <span>Organizations</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item">
            <a href="" class="sidebar-link">
            <i class='bx bxs-user-account'></i>
              <span>Admin List</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="" class="sidebar-link">
              <i class='bx bxs-info-circle' ></i>
              <span>About</span>
            </a>
          </li>

        </ul>
        <!--Sidebar Navigation Ends-->
        <div class="sidebar-footer">
          <a href="" class="sidebar-link">
          <i class='bx bx-log-out' ></i>
            <span>Log out</span>
          </a>
        </div>
      </aside>
    <!--Sidebar end-->

    <!--Main Content-->
      <div class="main">
        <nav class="navbar navbar-expand border-bottom">
            <button class="toggle-btn" type="button">
              <i class="lni lni-align-text-left"></i>
          </button>
        </nav>
        <main class="p-3">
          <div class="">
            <div class="mb-3">
                <?php 
                include 'Admin.php';
                ?>
            </div>
          </div>
        </main>
      </div>

    </div>
    <script src="Admin-Sidebar-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
     crossorigin="anonymous"></script> 
  </body>
</html>