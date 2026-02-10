<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" style="height:40px; width:auto; margin-right:8px;">
      Uma Memorial Public School
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item <?= ($currentPage == 'index.php') ? 'active' : '' ?>">
          <a href="index.php" class="nav-link">Home</a>
        </li>

        <li class="nav-item <?= ($currentPage == 'about.php') ? 'active' : '' ?>">
          <a href="about.php" class="nav-link">About</a>
        </li>

        <!-- Academics Dropdown -->
        <li class="nav-item dropdown <?= in_array($currentPage, ['sample-paper.php','syllabus.php','time-table.php']) ? 'active' : '' ?>">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            Academics
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item <?= ($currentPage == 'sample-paper.php') ? 'active' : '' ?>" href="sample-paper.php">Sample Paper</a>
            <a class="dropdown-item <?= ($currentPage == 'syllabus.php') ? 'active' : '' ?>" href="syllabus.php">Syllabus</a>
            <a class="dropdown-item <?= ($currentPage == 'time-table.php') ? 'active' : '' ?>" href="time-table.php">Time Table</a>
          </div>
        </li>

        <!-- Admissions Dropdown -->
        <li class="nav-item dropdown <?= in_array($currentPage, ['admission.php','rte-admission.php']) ? 'active' : '' ?>">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            Admissions
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item <?= ($currentPage == 'admission.php') ? 'active' : '' ?>" href="admission.php">Admission</a>
            <a class="dropdown-item <?= ($currentPage == 'rte-admission.php') ? 'active' : '' ?>" href="rte-admission.php">RTE-Admission</a>
          </div>
        </li>

        <li class="nav-item <?= ($currentPage == 'startup-innovation.php') ? 'active' : '' ?>">
          <a href="startup-innovation.php" class="nav-link">Startup & Innovation</a>
        </li>

        <li class="nav-item cta">
          <a href="https://vmsacademy.com/en/1225/10359" class="nav-link" style="white-space:nowrap;"><span>Apply Now!</span></a>
        </li>

      </ul>
    </div>
  </div>
</nav>
