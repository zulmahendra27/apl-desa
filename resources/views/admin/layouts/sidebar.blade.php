<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ request()->is('dashboard') ? '' : 'collapsed' }}" href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link {{ request()->is('dashboard/profile*') ? '' : 'collapsed' }}" href="/dashboard/profile">
        <i class="bx bx-user-pin"></i>
        <span>Profil Desa</span>
      </a>
    </li><!-- End Profile Nav -->

    <li class="nav-item ">
      <a class="nav-link {{ !request()->is(['dashboard', 'dashboard/agenda*', 'dashboard/profile*', 'dashboard/galleries*']) ? '' : 'collapsed' }}"
        data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-envelope"></i><span>Surat</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav"
        class="nav-content collapse {{ !request()->is(['dashboard', 'dashboard/agenda*', 'dashboard/profile*', 'dashboard/galleries*']) ? 'show' : '' }}"
        data-bs-parent="#sidebar-nav">
        <li>
          <a href="/dashboard/categories" class="{{ request()->is('dashboard/categories*') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Kategori Surat</span>
          </a>
        </li>
        <li>
          <a href="/dashboard/inletters" class="{{ request()->is('dashboard/inletters*') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Surat Masuk</span>
          </a>
        </li>
        <li>
          <a href="/dashboard/outletters" class="{{ request()->is('dashboard/outletters*') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Surat Keluar</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link {{ request()->is('dashboard/agenda*') ? '' : 'collapsed' }}" href="/dashboard/agenda">
        <i class="bx bx-calendar-event"></i>
        <span>Agenda</span>
      </a>
    </li><!-- End Agenda Nav -->

    <li class="nav-item">
      <a class="nav-link {{ request()->is('dashboard/galleries*') ? '' : 'collapsed' }}" href="/dashboard/galleries">
        <i class="bx bx-photo-album"></i>
        <span>Galeri</span>
      </a>
    </li><!-- End Gallery Nav -->

  </ul>

</aside><!-- End Sidebar-->
