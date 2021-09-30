<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Finplus Nasabah</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{route('home')}}">Finplus +</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('home')}}">F+</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ (request()->is('home')) ? 'active' : '' }}"><a class="nav-link" href="{{route('home')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Starter</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-box"></i> <span>DTTOT</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('terorist.index')}}">Master Data</a></li>
                <li><a class="nav-link" href="{{route('datanik.index')}}">Data NIK</a></li>
                <li><a class="nav-link" href="{{route('datapaspor.index')}}">Data Tanpa NIK</a></li>
              </ul>
            </li>
            <li class="{{ (request()->is('nasabah')) ? 'active' : '' }}"><a class="nav-link" href="{{route('nasabah.index')}}"><i class="fas fa-users"></i> <span>Cek Nasabah Ilegal</span></a></li>
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

    <div class="modal fade bd-example-modal-lg" id="practice_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="form-group">
            <label for="">Deskripsi</label>
            <br>
            <p id="desc"> <i style="color: #c7c7c7">Tidak ada data</i> </p>

            <label for="">Terduga</label>
            <br>
            <p id="terduga"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Kode Densus</label>
            <br>
            <p id="kode_densus"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Tempat Lahir</label>
            <br>
            <p id="tempat_lahir"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Tanggal Lahir</label>
            <br>
            <p id="tanggal_lahir"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Warga Negara</label>
            <br>
            <p id="warga_negara"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Alamat</label>
            <br>
            <p id="alamat"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Pekerjaan</label>
            <br>
            <p id="pekerjaan"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Informasi Lain</label>
            <br>
            <p id="informasi_lain"><i style="color: #c7c7c7">Tidak ada data</i></p>

          </div>
          </div>
          
        </div>
      </div>
    </div>


    <div class="modal fade bd-example-modal-lg" id="practice_modal_nik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitleNik">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="datanik_id" value="">
            <label for="">ID Nik</label>
            <br>
            <p id="id_nik"> <i style="color: #c7c7c7">Tidak ada data</i> </p>

            <label for="">Deskripsi</label>
            <br>
            <p id="desc_nik"> <i style="color: #c7c7c7">Tidak ada data</i> </p>

            <label for="">Terduga</label>
            <br>
            <p id="terduga_nik"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Kode Densus</label>
            <br>
            <p id="kode_densus_nik"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Tempat Lahir</label>
            <br>
            <p id="tempat_lahir_nik"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Tanggal Lahir</label>
            <br>
            <p id="tanggal_lahir_nik"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Warga Negara</label>
            <br>
            <p id="warga_negara_nik"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Alamat</label>
            <br>
            <p id="alamat_nik"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Pekerjaan</label>
            <br>
            <p id="pekerjaan_nik"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Informasi Lain</label>
            <br>
            <p id="informasi_lain_nik"><i style="color: #c7c7c7">Tidak ada data</i></p>

          </div>
          </div>
          
        </div>
      </div>
    </div>


    <div class="modal fade bd-example-modal-lg" id="practice_modal_paspor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitlePaspor">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="datanonik_id" value="">
            <label for="">ID Paspor</label>
            <br>
            <p id="id_paspor"> <i style="color: #c7c7c7">Tidak ada data</i> </p>

            <label for="">Deskripsi</label>
            <br>
            <p id="desc_paspor"> <i style="color: #c7c7c7">Tidak ada data</i> </p>

            <label for="">Terduga</label>
            <br>
            <p id="terduga_paspor"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Kode Densus</label>
            <br>
            <p id="kode_densus_paspor"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Tempat Lahir</label>
            <br>
            <p id="tempat_lahir_paspor"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Tanggal Lahir</label>
            <br>
            <p id="tanggal_lahir_paspor"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Warga Negara</label>
            <br>
            <p id="warga_negara_paspor"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Alamat</label>
            <br>
            <p id="alamat_paspor"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Pekerjaan</label>
            <br>
            <p id="pekerjaan_paspor"><i style="color: #c7c7c7">Tidak ada data</i></p>

            <label for="">Informasi Lain</label>
            <br>
            <p id="informasi_lain_paspor"><i style="color: #c7c7c7">Tidak ada data</i></p>

          </div>
          </div>
          
        </div>
      </div>
    </div>


    <div class="modal fade bd-example-modal-lg" id="practice_modal_nasabah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitleNasabah">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="nasabah_id" value="">
            <label for="">ID NIK</label>
            <br>
            <p id="nik_data"> <i style="color: #c7c7c7">Tidak ada data</i> </p>

            <label for="">Status</label>
            <br>
            <p id="status"> <i style="color: #c7c7c7">Tidak ada data</i> </p>

            <label for="">Track</label>
            <br>
            <p id="track"> <i style="color: #c7c7c7">Tidak ada data</i> </p>

            <label for="">Note</label>
            <br>
            <p id="note"> <i style="color: #c7c7c7">Tidak ada data</i> </p>

          </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="{{asset('assets/js/stisla.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script> -->
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/histogram-bellcurve.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script> -->
    <script>
      $(document).ready(function() {
        $('#example').DataTable({
          language: {
            searchPlaceholder: "Cari nama,NIK atau paspor"
          }
        });
      });
    </script>
    @yield('javascript')
    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- Page Specific JS File -->
</body>

</html>