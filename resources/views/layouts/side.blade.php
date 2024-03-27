<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">{{Auth::user()->role->name}}</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
      <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->

  <!-- Heading -->
  <div class="sidebar-heading">
      Daftar
  </div>
  


  <!-- Nav Item - Tables -->
  <li class="nav-item">
      <a class="nav-link" href="/siswa">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables Siswa</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/class">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables Kelas</span></a>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  @if (Auth::user()->role_id != 1)
  @else
  <div class="sidebar-heading">
    Trash
</div>

<li class="nav-item">
    <a class="nav-link" href="/restore">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables Restore</span></a>
</li>
@endif
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>