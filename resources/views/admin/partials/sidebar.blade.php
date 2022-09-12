<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}" class="logo">Common Report</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">Sr</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="fa fa-columns"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="menu-header">Column Maintenance</li>
      <li class="{{ Request::route()->getName() == 'newctmcol' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('newctmcol') }}">
        <i class="fa fa-table" aria-hidden="true"></i> <span>New Custom Columns</span>
        </a>
      </li>
      <li class="{{ Request::route()->getName() == 'massudtcol' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('massudtcol') }}">
        <i class="fa fa-table" aria-hidden="true"></i> <span>Mass Update Custom Column</span>
        </a>
      </li>
      <li class="{{ Request::route()->getName() == 'autoupdateview' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('autoupdateview') }}">
        <i class="fa fa-table" aria-hidden="true"></i> <span>Auto-Update Custom Columns</span>
        </a>
      </li>
      <li class="{{ Request::route()->getName() == 'reorderview' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('reorderview') }}">
        <i class="fa fa-table" aria-hidden="true"></i> <span>Reorder Columns</span>
        </a>
      </li>
      <li class="{{ Request::route()->getName() == 'admin.colmaintenance' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fa fa-table" aria-hidden="true"></i> <span>Sort Columns</span>
        </a>
      </li>
      <li class="{{ Request::route()->getName() == 'hideview' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('hideview') }}">
        <i class="fa fa-table" aria-hidden="true"></i> <span>Hide/Unhide Columns</span>
        </a>
      </li>

      <li class="menu-header">Layouts</li>
      <li class="{{ Request::route()->getName() == 'admin.layout' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fa fa-th" aria-hidden="true"></i> <span>Save Current layout</span>
        </a>
      </li>
      <li class="{{ Request::route()->getName() == 'admin.layout' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fa fa-th" aria-hidden="true"></i> <span>Layout Maintenance</span>
        </a>
      </li>

      <li class="menu-header">Access Rights</li>
      <li class="{{ Request::route()->getName() == 'admin.accessright' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fa fa-low-vision" aria-hidden="true"></i> <span>Access Rights</span>
        </a>
      </li>
      @if(Auth::user()->can('manage-users'))
      <li class="menu-header">Users</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
      @endif
  </ul>
</aside>
