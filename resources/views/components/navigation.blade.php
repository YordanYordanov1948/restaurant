<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Restaurant Name</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('services') }}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('menu') }}">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contacts') }}">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('booking') }}">Booking</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
