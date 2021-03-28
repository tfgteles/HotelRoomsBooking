{{-- StAuth10065: I Tiago Franco de Goes Teles, 000786450 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else. --}}

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