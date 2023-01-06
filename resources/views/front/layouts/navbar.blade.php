<nav id="navbar" class="navbar">
  <ul>
    <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
    <li class="dropdown">
      <a href="#" class="{{ request()->is(['visi-misi', 'struktur']) ? 'active' : '' }}">
        <span>Profil</span> <i class="bi bi-chevron-down"></i>
      </a>
      <ul>
        <li><a href="/struktur">Struktur Desa</a></li>
        <li><a href="/visi-misi">Visi Misi</a></li>
      </ul>
    </li>
    <li><a class="{{ request()->is('agenda') ? 'active' : '' }}" href="/agenda">Agenda</a></li>
    <li><a class="{{ request()->is('galleries') ? 'active' : '' }}" href="/galleries">Galeri</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
  {{-- <p>{{ request() }}</p> --}}
</nav><!-- .navbar -->
