
<!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
          
    <div class="row">
      <div class="col-lg-6">
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>'); ?>

        <?= $this->session->flashdata('message'); ?>


<form action="" method="post">
  <input type="hidden" name="id" value="<?= $subMenu['id']; ?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="<?= $subMenu['title']; ?>">
  </div>
  <div class="form-group">
    <label for="menu">Menu</label>
    <input type="text" class="form-control" id="menu" name="menu" value="<?= $subMenu['menu_id']; ?>" >
  </div>
  <div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" id="url" name="url" value="<?= $subMenu['url']; ?>">
  </div>
  <div class="form-group">
    <label for="icon">Icon</label>
    <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenu['icon']; ?>">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="cek" selected>
    <label class="form-check-label" for="cek">Actived</label>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>