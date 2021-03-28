<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">

      @if ($title === 'Rooms')
          <li class="nav-item active">
      @else
          <li class="nav-item">
      @endif
      <a class="nav-link" href="/rooms">Rooms</a>
    </li>

    @if ($title === 'Bookings')
          <li class="nav-item active">
      @else
          <li class="nav-item">
      @endif
      <a class="nav-link" href="/bookings">Bookings</a>
    </li>

    @if ($title === 'About')
          <li class="nav-item active">
      @else
          <li class="nav-item">
      @endif
      <a class="nav-link" href="/about">About</a>
    </li>
  </ul>
</nav>