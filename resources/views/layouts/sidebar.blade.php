<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ request()->is('dashboard') ? '' : 'collapsed' }}" href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item ">
      <a class="nav-link {{ !request()->is(['dashboard*', 'agenda*']) ? '' : 'collapsed' }}"
        data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-envelope"></i><span>Surat</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse {{ !request()->is(['dashboard*', 'agenda*']) ? 'show' : '' }}"
        data-bs-parent="#sidebar-nav">
        <li>
          <a href="/categories" class="{{ request()->is('categories*') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Kategori Surat</span>
          </a>
        </li>
        <li>
          <a href="/inletters" class="{{ request()->is('inletters*') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Surat Masuk</span>
          </a>
        </li>
        <li>
          <a href="/outletters" class="{{ request()->is('outletters*') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Surat Keluar</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link {{ request()->is('agenda*') ? '' : 'collapsed' }}" href="/agenda">
        <i class="bx bx-calendar-event"></i>
        <span>Agenda</span>
      </a>
    </li><!-- End Agenda Nav -->

  </ul>

</aside><!-- End Sidebar-->
