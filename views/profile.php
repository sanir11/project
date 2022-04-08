<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $perusahaan = $_POST['perusahaan'];
  $jabatan = $_POST['jabatan'];
  $foto = $_POST['foto'];

  if(!empty($foto)) {
    $simpan = mysqli_query($koneksi, 
    "update user set nama='$nama', perusahaan='$perusahaan', jabatan='$jabatan',
    foto='$foto' where id=1"
    );
  } else {
    $simpan = mysqli_query($koneksi, 
    "update user set nama='$nama', perusahaan='$perusahaan', jabatan='$jabatan',
    where id=1"
    );
  }

  if($simpan) {
    $pesan = "<div class='alert alert-success'>Berhasil diperbaharui</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Terjadi kesalahan</div>";
  }
}


$query = mysqli_query($koneksi, "SELECT * FROM `user` where id=1 ");
$data = mysqli_fetch_assoc($query);
?>

<div class="row mb-5">
  <div class="col-md-12">
    <h1>profile</h1>
    <div class="row">
      <div class="col-md-6">
        <?=@$pesan?>
        <form action="" method="post">
          <div class="form-group">
            <label for="">NAMA LENGKAP</label>
            <input name="nama" type="text" value="<?=$data['nama']?>" class="form-control" placeholder="ex: sani">
          </div>
          <div class="form-group">
            <label for="">JABATAN</label>
            <input name="jabatan" type="text" value="<?=$data['jabatan']?>" class="form-control" placeholder="ex: Pelajar">
          </div>
          <div class="form-group">
            <label for="">PERUSAHAAN</label>
            <input name="perusahaan" type="text" value="<?=$data['perusahaan']?>" class="form-control" placeholder="ex: SMKN 4 Tasikmalaya">
          </div>
          <div class="form-group">
            <label for="">FOTO</label>
            <img src="<?=$data['foto']?>" width="100" style="border-radius:50%">
            <input name="foto" type="text" placeholder="paste URL foto" class="form-control">
          </div>
          <button type="submit" class="btn btn-danger" name="simpan">SIMPAN</button>
        </form>
      </div>
    </div>
  </div>
</div>