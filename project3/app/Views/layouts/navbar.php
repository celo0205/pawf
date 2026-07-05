<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">⚽ Lapangan Futsal Pulau Tidung</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/post">Booking</a>
        </li>

        <?php if(session()->get('logged_in')): ?>
          <li class="nav-item">
            <a class="nav-link text-warning" href="/logout">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link text-warning" href="/login">Login</a>
          </li>
        <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>