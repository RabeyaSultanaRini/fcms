<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        
      </div>
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          
          </li> -->
         
          <!-- <li class="nav-item">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            
          
              
              
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.addtrainer')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Trainer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.trainer.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trainer List</p>
                </a>
              </li >
              <li class="nav-item">
                <a href="{{route('admin.shift')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shift</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.Shift.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shift List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.addpackage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Package</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.Package.List')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Package List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.adddiet')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Basic Diet</p>
        
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.Diet.List')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diet List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.addequipment')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.Equipment.List')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipment List</p>
                </a>
              </li>
          
          <li class="nav-item">
                <a href="{{route('admin.addpayment')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.Payment.List')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment List</p>
                </a>
              </li>
              </ul>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Trainer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
                
              
              <li class="nav-item">
                <a href="{{route('admin.addattendance')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.Attendance.List')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.addequipment')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.Equipment.List')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipment List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Member
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.addmember')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.member.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
             
            </ul>
          </li>
         
          
          
          
          
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <button><a class="nav-link px-3"style="color:black;background-color:darkgrey;" href="{{route('admin.logout')}}">Sign out</a></button>
    </div>
    </div>
    
    <!-- /.sidebar -->
  </aside>