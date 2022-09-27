<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<form action="/update/<?= $id ?>" method="post">
  <div class="form-group">
    <label for="npm">NPM</label>
    <input type="text" name="npm" class="form-control" id="npm" value="<?= $npm ?>">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="npm">NPM</label>
        <input type="text" name="npm" class="form-control" id="npm" value="<?= $npm ?>">
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $alamat ?>">
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea type="text" name="deskripsi" class="form-control" id="deskripsi"><?= $deskripsi ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $alamat ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</form>
<?= $this->endSection() ?>