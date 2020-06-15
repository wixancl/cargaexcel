

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<META HTTP-EQUIV="REFRESH" CONTENT="60;URL=#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!--<link href="{{ asset('css/sigdoc.css') }}" rel="stylesheet"> -->
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

@include('layouts.menu')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> </h1>
          </div>

        @yield('content')

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
  

              <!-- Color System -->
              <div class="row">
              </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->


              <!-- Approach -->


            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>SSMOC &copy;2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Preparado para irme?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">

          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          
          <!-- <a class="btn btn-primary" href="login.html">Cerrar sesión</a> -->
            <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Salir
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </div>
      </div>
    </div>
  </div>


  <!-- Categorizacion Modal HpSanJuan-->
  <div class="modal fade" id="HpSanJuan" tabindex="-1" role="dialog" aria-labelledby="categorizacion" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="HpSanJuan">San Juan de Dios</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        
        <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Adulto
                      <div class="text-white-50 small">00</div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Pediatrico
                      <div class="text-white-50 small">00</div>
                    </div>
                  </div>
                </div>                    
        </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Categorizacion Modal HpPenaflor -->
  <div class="modal fade" id="HpPenaflor" tabindex="-1" role="dialog" aria-labelledby="categorizacion" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="HpPenaflor">Peñaflor</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        
        <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Adulto
                      <div class="text-white-50 small">1</div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Pediatrico
                      <div class="text-white-50 small">1</div>
                    </div>
                  </div>
                </div>                    
        </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Categorizacion Modal HpTalagante -->
  <div class="modal fade" id="HpTalagante" tabindex="-1" role="dialog" aria-labelledby="categorizacion" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="HpTalagante">Talagante</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        
        <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Adulto
                      <div class="text-white-50 small">1</div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Pediatrico
                      <div class="text-white-50 small">1</div>
                    </div>
                  </div>
                </div>                    
        </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Categorizacion Modal HpCuracavi -->
  <div class="modal fade" id="HpCuracavi" tabindex="-1" role="dialog" aria-labelledby="categorizacion" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="HpCuracavi">Curacavi</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        
        <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Adulto
                      <div class="text-white-50 small"> 1</div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Pediatrico
                      <div class="text-white-50 small">1</div>
                    </div>
                  </div>
                </div>                    
        </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>




  <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>





    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <!-- Scripts -->
    <!-- SCRIPT DESHABILITA BOTON -->
    <script>
        $("form").submit(function(){
            $('#send').prop('disabled', true);
        });    
    </script>
    <!-- FIN SCRIPT DESHABILITA BOTON -->
    <script src="{{ asset('js/app.js') }}"></script>
   
</body>
</html>
