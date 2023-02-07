<!DOCTYPE html>

      <?php 
      include 'koneksi.php';

      session_start();

      $id = '';
      $nik = '';
      $nama_lengkap = '';
      $umur = '';
      $tanggal_lahir = '';
      $jenis_kelamin = '';
      $alamat = '';
      $negara = '';

        if (isset($_GET['ubah'])){
          $id = $_GET['ubah'];
          
          $query = "SELECT * FROM tb_pribadi WHERE id = '$id';";
          $sql = mysqli_query($conn, $query);
          $result = mysqli_fetch_assoc($sql);

          $nik = $result['nik'];
          $nama_lengkap = $result['nama_lengkap'];
          $umur = $result['umur'];
          $tanggal_lahir = $result['tanggal_lahir'];
          $jenis_kelamin = $result['jenis_kelamin'];
          $alamat = $result['alamat'];
          $negara = $result['negara'];

        }
      ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Data Pribadi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Font Awsome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold m-2" href="#">
          <img src="img/folder.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top" />
          Aplikasi Data Pribadi
        </a>
      </div>
    </nav>
    <!-- Last Navbar -->

    <!-- Add Data -->
    <div class="container mt-2">
      <form method="POST" action="process.php" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $id; ?>" name="id">
      <div class="mb-2 row">
        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
        <input required type="number" class="form-control" name="nik" id="nik" placeholder="Example : 33700569..."  value="<?php echo $nik; ?>">
        </div>
      <div class="mb-2 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <input required type="text" class="form-control" name="nama_lengkap" id="nama" placeholder="Example : Zachary Luthfy Riszqon" value="<?php echo $nama_lengkap; ?>" />
      </div>
      <div class="mb-2 row">
        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
        <input required type="number" class="form-control" name="umur" id="umur" placeholder="Example : 17" value="<?php echo $umur; ?>" />
      </div>
      <div>
        <label for="">Jenis Kelamin</label> <br />
        <input <?php if($jenis_kelamin == 'Laki-Laki'){echo "checked";} ?> required type="radio" name="jenis_kelamin" value="Laki-Laki" /> Laki-Laki 
        <input <?php if($jenis_kelamin == 'Perempuan'){echo "checked";} ?> required style="margin-left: 20px" type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan
      </div>
      <div class="mb-2 row mt-2">
        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <input value="<?php echo $tanggal_lahir; ?>" required type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="" />
      </div>
      <div class="mb-2 row">
        <label for="textarea">Alamat</label>
        <textarea required class="form-control" placeholder="Example : Los Angeles" name="alamat" id="textarea"><?php echo $alamat; ?></textarea>
      </div>
      <div class="mb-2 row mt-2">
        <label for="negara" class="col-sm-2 col-form-label">Negara</label>
        <select required id="negara" class="form-select" name="negara" aria-label="Default select example">
        
          <option <?php if($negara == 'Amerika'){echo "selected";} ?> value="Amerika">Amerika</option>
          <option <?php if($negara == 'Argentina'){echo "selected";} ?> value="Argentina">Argentina</option>
          <option <?php if($negara == 'Brazil'){echo "selected";} ?> value="Brazil">Brazil</option>
          <option <?php if($negara == 'Indonesia'){echo "selected";} ?> value="Indonesia">Indonesia</option>
          <option <?php if($negara == 'Inggris'){echo "selected";} ?> value="Inggris">Inggris</option>
          <option <?php if($negara == 'Jepang'){echo "selected";} ?> value="Jepang">Jepang</option>
          <option <?php if($negara == 'Jerman'){echo "selected";} ?> value="Jerman">Jerman</option>
          <option <?php if($negara == 'Korea'){echo "selected";} ?> value="Korea">Korea</option>
          <option <?php if($negara == 'Portugal'){echo "selected";} ?> value="Portugal">Portugal</option>
          <option <?php if($negara == 'Prancis'){echo "selected";} ?> value="Prancis">Prancis</option>
          <option <?php if($negara == 'Russia'){echo "selected";} ?> value="Russia">Russia</option>
          <option <?php if($negara == 'Spanyol'){echo "selected";} ?> value="Spanyol">Spanyol</option>
          <option <?php if($negara == 'Zimbabwe'){echo "selected";} ?> value="Zimbabwe">Zimbabwe</option>
        </select>
      </div>
      <div class="mb-2 row text-center">
        <div class="col">
          <a href="index.php" type="button" class="btn btn-danger"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali </a>
                  <?php 
                      if (isset($_GET['ubah'])){
                    ?>
                  <button type="submit" name="aksi" value="edit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
                <?php } else {
                ?>
                 <button type="sumbit" name="aksi" value="add" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Tambah Data</button>
                  <?php 
                  }
                  ?>
                </div>
      </div>
      </form>
      </div>
    </div>
  </body>
</html>
