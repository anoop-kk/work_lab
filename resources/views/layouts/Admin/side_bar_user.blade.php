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
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>