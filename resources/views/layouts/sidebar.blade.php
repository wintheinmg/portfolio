 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin.home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    {{-- front end --}}
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#frontend-nav" data-bs-toggle="collapse" href="#">
            <i class="fa-solid fa-image-portrait"></i><span>Frontend</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="frontend-nav" class="nav-content collapse  {{ request()->is('admin/user*') || request()->is('admin/role*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">

          <li>
            <a href="{{ route('admin.about.index') }}">
              <i class="bi bi-circle"></i><span>About</span>
            </a>
          </li>

        </ul>
    </li>



      <!-- End Components Nav -->
    </ul>

  </aside><!-- End Sidebar-->
