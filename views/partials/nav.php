<?php $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'index'; ?>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="/php">PHP CRUD - Procedural</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo $uri === '/php/' ? 'active' : '' ; ?>" aria-current="page" href="/php/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $uri === '/php/employee.php' ? 'active' : '' ; ?>" aria-current="page" href="/php/employee.php">Employee List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $uri === '/php/add.php' ? 'active' : '' ; ?>" href="/php/add.php">Add Employee</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>