<div class="container">
<div class="row mt-3">
<div class="col-md-6">
<div class="card">
  <div class="card-header">
    Form Tambah Data Mahasiswa
  </div>
  <div class="card-body">
    <form action="" method="post">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
        <?= form_error('nama', '<div class=" alert-danger" role="alert">','</div>'); ?>
      </div>
      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim">
        <?= form_error('nim', '<div class=" alert-danger" role="alert">','</div>'); ?>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
        <?= form_error('email', '<div class=" alert-danger" role="alert">','</div>'); ?>
      </div>
      <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan">
        <?= form_error('jurusan', '<div class=" alert-danger" role="alert">','</div>'); ?>
      </div>
    
      <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
</form>
  </div>
</div>

</div>
</div>
</div>