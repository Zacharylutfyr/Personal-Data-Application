<?php   
     include 'koneksi.php';
    function nambah_data($data){
        $nik = $data['nik'];
        $nama_lengkap = $data['nama_lengkap'];
        $umur = $data['umur'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $alamat = $data['alamat'];
        $negara = $data['negara'];

        $query = "INSERT INTO tb_pribadi VALUES(null, '$nik', '$nama_lengkap', '$umur', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$negara')";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }

    function ubah_data($_data){
        $id = $_data['id'];
        $nik = $_data['nik'];
        $nama_lengkap = $_data['nama_lengkap'];
        $umur = $_data['umur'];
        $tanggal_lahir = $_data['tanggal_lahir'];
        $jenis_kelamin = $_data['jenis_kelamin'];
        $alamat = $_data['alamat'];
        $negara = $_data['negara'];

        $query = "UPDATE tb_pribadi SET nik='$nik', nama_lengkap='$nama_lengkap', umur='$umur',tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', negara='$negara' WHERE id = '$id';";
        $sql = mysqli_query($GLOBALS['conn'], $query);
    
        return true;
        
    }

    function hapus_data ($data) {
        $id = $data['hapus'];
        $query = "DELETE FROM tb_pribadi WHERE id = '$id';";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }

?>