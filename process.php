<?php 
    include 'fungsi.php';
    session_start();
    
    
    if (isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            $berhasil = nambah_data($_POST, $_FILES);

            if ($berhasil){
                $_SESSION['eksekusi'] = "Data Telah Berhasil Ditambahkan"; 
                header("location: index.php");
            } else {
                echo $berhasil;
            }
            
            } elseif($_POST['aksi'] == "edit"){
        
            $berhasil = ubah_data($_POST);
            
            if ($berhasil){
                $_SESSION['eksekusi'] = "Data Telah Berhasil Di Update"; 

                header("location: index.php");
            } else {
                echo $berhasil;
            }
        }
    }
    if (isset($_GET['hapus'])){

        $berhasil = hapus_data($_GET);
        if ($berhasil){
            $_SESSION['eksekusi'] = "Data Telah Berhasil Di Hapus"; 
            header("location: index.php");
        } else {
            echo $berhasil;
        }
    }
?>