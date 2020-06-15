    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <!--<i class="fas fa-laugh-wink"></i>-->
        </div>
        <div class="sidebar-brand-text mx-3">Red de Urgencia SSMOC</div>
	<div class="col-lg-6 d-none d-lg-block"><img alt="" src="{{ asset('image/SSMOC.jpg') }}" style="width: 100%"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ URL::to('/') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse01" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Opciones</span>
        </a>

        <div id="collapse01" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Detalle:</h6>
              
              @if( Auth::user()->isRole('Carga'))
          		<a class="collapse-item" href="{{ URL::to('carga') }}">Carga Datos</a>
              @endif



            @if( Auth::user()->isRole('Oficina de Partes') )

                <a href="{{ URL::to('garantias/oficinaPartes') }}"> Ingreso </a>
                <a href="{{ URL::to('garantias/oficinaPartes/nomina') }}"> Nóminas </a>
                <a href="{{ URL::to('garantias/oficinaPartes/listaNomina') }}"> Reporte Nóminas </a>

            @endif


            
          </div>
        </div>
      </li>      






      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


        <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
              </a>


              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
  
                <a class="dropdown-item" href="{{ URL::to('users/password/cambiar') }}"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Cambiar Contraseña </a>


        
                @if( Auth::user()->isRole('Administrador') )
                <a class="dropdown-item" href="{{ URL::to('users') }}"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Usuarios </a>
                @endif


                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>

              </div>


            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-4x fa-fw "></i>
                  </a>

<!--
            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1 text-gray-400"></i>
              </a>  
            </li>
-->






























          </ul>

        </nav>
        <!-- End of Topbar -->
