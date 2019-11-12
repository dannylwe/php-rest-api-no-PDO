<?php
    require_once('connection.php');
    
    // adding currently works with only form data
    if(isset($_POST['nama'])&&isset($_POST['kelas'])&&isset($_POST['alamat'])&&isset($_POST['jurusan'])&&isset($_POST['pangkat'])){        
    $nama    = $_POST['nama'];
    $kelas   = $_POST['kelas'];
    $alamat  = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $pangkat = $_POST['pangkat'];
    
    // Query untuk Insert
    $SQL = $conn -> prepare("INSERT INTO biodata (nama, kelas, alamat, jurusan, pangkat) VALUES (?,?,?,?,?)");
    $SQL -> bind_param("sssss",$nama,$kelas,$alamat,$jurusan,$pangkat);
    $SQL -> execute(); 
    
    if($SQL) {
        echo json_encode(array( 'RESPONSE'=>'SUCCESS' ));
    } else {
        echo json_encode(array( 'RESPONSE'=>'FAILED' ));
    }
    } else {
        echo "GAGAL";
    }
?>