<?php 
    include 'koneksi.php';
    session_start();

    $query = "SELECT * FROM tb_pribadi;";
    $sql = mysqli_query($conn, $query );
    $no = 0;
   
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Pribadi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Font Awsome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.css">
    <script type="text/javascript" src="datatables/datatables.js"></script>

</head>
<script>
    $(document).ready(function () {
    $('#dt').DataTable();
});
</script>
<body>

    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold m-2" href="#">
            <img src="img/folder.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Aplikasi Data Pribadi
          </a>
        </div>
      </nav>
      <!-- Last Navbar -->

      <!-- Container -->
      <div class="container-fluid mt-3 mb-3">
        <div class="card text-center">
            <div class="card-header">
            Design Tampilan
            </div>
            <div class="card-body">
              <h5 class="card-title">Data Table of some Famous people in the World</h5>
              <p class="card-text">With a few Buttons below You can create the Appearance of the table You want.</p>
              <a href="kelola.php" class="btn btn-success">Add Data <i class="fa fa-database m-2 aria-hidden="true"></i>
              </a>
            </div>
          </div>
      </div>
      <!-- Last Container -->

        <!-- Alert -->
        <?php 
        if (isset($_SESSION['eksekusi'])):
        ?>
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <strong>
                    <?php 
                        echo $_SESSION['eksekusi'];
                    ?>
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            session_destroy(); 
            endif;
        ?>
        <!-- Last Alert -->

         <!-- Table -->
        <div class="table-responsive mt- container-fluid">
            <table id="dt" class="table align-middle table-bordered table-hover">
            <thead>
                <tr class="text-center">
                <th>No.</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Umur</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Negara</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($result = mysqli_fetch_assoc($sql)){
                ?> 
                
                <tr class="text-center">
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $result['nik'];?></td>
                    <td><?php echo $result['nama_lengkap'];?></td>
                    <td><?php echo $result['umur'];?></td>
                    <td><?php echo $result['tanggal_lahir'];?></td>
                    <td><?php echo $result['jenis_kelamin'];?></td>
                    <td><?php echo $result['alamat'];?></td>
                    <td><?php echo $result['negara'];?></td>
                    <td>
                            <a href="tampil.php?tampil=<?php echo $result['id'];?>" type="button" class="btn btn-warning btn-sm" style="color: white;">Detail
                            <br><i class="fa fa-info-circle" aria-hidden="true"></i>
                           </a>
                            <a href="kelola.php?ubah=<?php echo $result['id'];?>"
                            type="button" class="btn btn-primary btn-sm">Edit
                            <br><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="process.php?hapus=<?php echo $result['id'];?>" 
                            type="button" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Anda yakin Data ini akan Di Hapus?')" >Delete
                            <br><i class="fa fa-trash" aria-hidden="true"></i>
                        </a>

                    </td>
                </tr>
                    <?php 
                        }
                    ?>
                
            </tbody>
        </table>


                <!-- Export  -->
                <div class="card text-center mt-3">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h5 class="card-text">You can Download the table data above in the form You want.</h5>
                <a href="export.php" class="btn btn-success m-2">Export <i class="fa fa-download m-2" aria-hidden="true"></i></a>
            </div>
            <div class="card-footer text-muted">
            </div>
            </div>
            <!-- Last export -->


            </div>
    <!-- Last Table -->
    <div class="mb-5"></div>
</body>
</html>