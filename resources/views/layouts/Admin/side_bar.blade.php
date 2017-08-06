  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
    
          <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="{{Auth::user()->name}}">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="home">
            <i class="fa fa-dashboard"></i> <span>@lang('menu.dash_board')</span>
           
          </a>
          
        </li>   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle"></i> <span>@lang('menu.role')</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="assign_role"><i class="fa fa-user" aria-hidden="true"></i></i>@lang('menu.assign_role')</a></li>
           
          </ul>
        </li>           
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle"></i> <span>@lang('menu.supplier')</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/suppliers')}}"><i class="fa fa-user" aria-hidden="true"></i></i>@lang('menu.supplier')</a></li>
           
          </ul>
        </li>           
             
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>