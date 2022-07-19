
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
        <h1>Edit pengajuan</h1>
       </div>
       <div class="card-body">
        <form action="{{ route('update-pengajuan', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama_ketua">Nama Ketua :</label>
                <input type="text" id="nama_ketua" value="{{ $data->nama_ketua }}" name="nama_ketua" class="form-control" placeholder="Masukan Nama" required>
            </div>
            <div class="form-group">
              <label for="nama_ketua">Jumlah Rombongan :</label>
                <input type="text" id="jumlah_rombongan" value="{{ $data->jumlah_rombongan }}" name="jumlah_rombongan" class="form-control" placeholder="Jumlah Rombongan" required>
            </div>
            <div class="form-group">
              <label for="nama_ketua">No. Telp/Whatsapp :</label>
                <input type="text" id="telp" name="telp" value="{{ $data->telp }}" class="form-control" placeholder="Masukan No Telp" required>
            </div>
            <div class="form-group">
              <label for="nama_ketua">Email :</label>
                <input type="text" id="email" name="email" value="{{ $data->email }}" class="form-control" placeholder="Masukan Email" required>
            </div>
            <div class="form-group">
              <label for="nama_ketua">Tujuan :</label>
                <input type="text" id="tujuan" name="tujuan" value="{{ $data->tujuan }}" class="form-control" placeholder="Masukan Tujuan Dinas" required>
            </div>
            <div class="form-group">
              <label for="nama_ketua">Maksud Tujuan :</label>
                <input type="text" id="maksud_tujuan" name="maksud_tujuan" value="{{ $data->maksud_tujuan }}" class="form-control" placeholder="Maksud Tujuan Dinas" required>
            </div>
            <div class="form-group">
              <label for="nama_ketua">Bukti surat :</label>
                <input type="file" id="bukti_surat" name="bukti_surat" value="{{ $data->bukti_surat }}" class="form-control" placeholder="Masukan Bukti Surat" required>
            </div>
            <div class="form-group">
              <img src="{{ asset('img/'.$data->bukti_surat) }}" height="10%" width="30%" alt="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </form>
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
</body>
</html>
