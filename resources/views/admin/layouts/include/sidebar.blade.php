<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href="./index.html" class="brand-link">
        <!--begin::Brand Image-->
        <img
          src="{{asset('admin/dist/assets/img/AdminLTELogo.png')}}"
          alt="AdminLTE Logo"
          class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">AdminLTE 4</span>
        <!--end::Brand Text-->
      </a>
      <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          role="menu"
          data-accordion="false"
        >
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>
                Dashboard
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('dashboard')}}" class=" {{request()->path()=='dashboard' ? 'nav-link active' : 'nav-link'}} ">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('slider')}}" class=" {{request()->path()=='slider' ? 'nav-link active' : 'nav-link'}} ">
              <i class="nav-icon bi bi-palette"></i>
              <p>Slider/Banner</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('galeri')}}" class=" {{request()->path()=='galeri' ? 'nav-link active' : 'nav-link'}} ">
              <i class="nav-icon bi bi-palette"></i>
              <p>Galeri/Kegiatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('videos')}}" class=" {{request()->path()=='videos' ? 'nav-link active' : 'nav-link'}} ">
              <i class="nav-icon bi bi-palette"></i>
              <p>Video</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-palette"></i>
              <p>Blog</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-palette"></i>
              <p>Visi/misi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-palette"></i>
              <p>Tentang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-palette"></i>
              <p>Pengaturan sistem</p>
            </a>
          </li>
        </ul>
        <!--end::Sidebar Menu-->
      </nav>
    </div>
    <!--end::Sidebar Wrapper-->
  </aside>
