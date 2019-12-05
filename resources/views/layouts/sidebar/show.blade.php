<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Share Your Light</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('admin.home.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Section
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  @foreach ($sections as $section)
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>{{$section->title}}</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">elements:</h6>
          @foreach ($elements as $element)
            @foreach ($element[0] as $item)
              @if ($section->id == $item->section_id)
                <h7 class="collapse-header">title</h7>
                <a class="collapse-item" href="#">{{$item->title}}</a>
              @endif
            @endforeach
            @foreach ($element[1] as $item)
              @if ($section->id == $item->section_id)
                <h7 class="collapse-header">subtitle</h7>
                <a class="collapse-item" href="#">{{$item->title}}</a>
              @endif
            @endforeach
            @foreach ($element[2] as $item)
              @if ($section->id == $item->section_id)
                <h7 class="collapse-header">image</h7>
                <a class="collapse-item" href="#">{{$item->title}}</a>
              @endif
            @endforeach
            @foreach ($element[3] as $item)
              @if ($section->id == $item->section_id)
                <h7 class="collapse-header">description</h7>
                <a class="collapse-item" href="#">{{$item->title}}</a>
              @endif
            @endforeach
          @endforeach
        </div>
      </div>
    </li>
  @endforeach

  <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
