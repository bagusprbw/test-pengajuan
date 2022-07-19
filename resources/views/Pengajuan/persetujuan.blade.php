
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('template.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0"></h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Halaman 1</li> --}}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <h1>Halaman Persetujuan</h1>
       </div>
       <div class="card-body">
         <table class="table table-bordered">
           <tr>
             <th>Nama Ketua Panitia</th>
             <th>Jumlah rombongan</th>
             <th>Kontak (telp/Whatsapp)</th>
             <th>Email</th>
             <th>Tujuan</th>
             <th>Maksud Tujuan</th>
             <th>Bukti surat Dinas</th>
             <th>Status</th>
             <th>Aksi</th>
            </tr>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $data->nama_ketua }}</td>
                <td>{{ $data->jumlah_rombongan }}</td>
                <td>{{ $data->telp }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->tujuan }}</td>
                <td>{{ $data->maksud_tujuan }}</td>
                <td>{{ $data->bukti_surat }}</td>
                <td>{{ $data->status }}</td>
            </tr>
            @endforeach
        </table>
       </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
@include('template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('template.script')
@include('sweetalert::alert')
</body>
</html>
