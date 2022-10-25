<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top"style="background-color:#79B4B7">
  <div class="container">
    <a class="navbar-brand" href="#">Hendra Gani</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-link">
          <a class="nav-link {{ ($elementActive == 'home') ? 'active' : ''}}" href="/home">Home</a>
        </li>
        <li class="nav-link">
          <a class="nav-link {{ ($elementActive == 'about') ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-link">
          <a class="nav-link {{ ($elementActive == 'project') ? 'active' : ''}}" href="/project">Projects</a>
        </li>
        <li class="nav-link">
          <a class="nav-link {{ ($elementActive == 'contact') ? 'active' : ''}}" href="/contact">Contact Me</a>
        </li>
        <li class="nav-link ">
          <a class="nav-link {{ ($elementActive == 'socmed') ? 'active' : ''}}" href="/socmed">SocMed</a>
        </li>
        <li class="nav-link ">
          <a class="nav-link {{ ($elementActive == 'admin') ? 'active' : ''}}" href="/admin">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>