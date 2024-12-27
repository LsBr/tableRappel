<header id="mainNavbar">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid nav-container">
      <a class="navbar-brand" href="#">MSystem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/Tablerappel/' || $_SERVER['REQUEST_URI'] == '/') ? 'active' : ''; ?>"
              href="/Tablerappel">Home</a>
          </li>
          <li class="nav-item">
            <?php
            $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $currentPage = basename($currentPath);
            ?>
            <a class="nav-link <?php echo ($currentPage == 'training.php') ? 'active' : ''; ?>"
              href="training.php">Training</a>
          </li>
        </ul>
        <div class="d-flex">
          <?php if (isset($_SESSION["loggedin"])) {
            ?>
            <button class="btn btn-outline-success" type="button">Connected as
              <?= $_SESSION["username"]; ?>
            </button>
            <a class="btn btn-outline-danger ms-2" href="src/logoutUser.php">Logout</a>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
  </nav>
</header>