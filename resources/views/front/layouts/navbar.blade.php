<nav id="navbar" class="navbar">
  <ul>
    <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
    <li><a class="{{ request()->is('agenda') ? 'active' : '' }}" href="/agenda">Agenda</a></li>
    <li><a class="{{ request()->is('galleries') ? 'active' : '' }}" href="/galleries">Galeri</a></li>
    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="#">Drop Down 1</a></li>
        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
          <ul>
            <li><a href="#">Deep Drop Down 1</a></li>
            <li><a href="#">Deep Drop Down 2</a></li>
            <li><a href="#">Deep Drop Down 3</a></li>
            <li><a href="#">Deep Drop Down 4</a></li>
            <li><a href="#">Deep Drop Down 5</a></li>
          </ul>
        </li>
        <li><a href="#">Drop Down 2</a></li>
        <li><a href="#">Drop Down 3</a></li>
        <li><a href="#">Drop Down 4</a></li>
      </ul>
    </li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
  {{-- <p>{{ request() }}</p> --}}
</nav><!-- .navbar -->
