<div class="container">
<div class="row mt-3">
<div class="col-md-6">
<div class="card">
  <div class="card-header">
    Form Ubah Data Mahasiswa
  </div>
  <div class="card-body">
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>"></input>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
        <?= form_error('nama', '<div class=" alert-danger" role="alert">','</div>'); ?>
      </div>
      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
        <?= form_error('nim', '<div class=" alert-danger" role="alert">','</div>'); ?>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
        <?= form_error('email', '<div class=" alert-danger" role="alert">','</div>'); ?>
      </div>
      <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mahasiswa['jurusan']; ?>">
        <?= form_error('jurusan', '<div class=" alert-danger" role="alert">','</div>'); ?>
      </div>
    
      <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
</form>
  </div>
</div>

</div>
</div>
</div>