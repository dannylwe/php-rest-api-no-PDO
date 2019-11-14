<?php
    require_once('connection.php');
    
    if(isset($_POST['id'])&&isset($_POST['nama'])&&isset($_POST['kelas'])&&isset($_POST['alamat'])&&isset($_POST['jurusan'])&&isset($_POST['pangkat'])){
    $id      = $_POST['id'];
    $nama    = $_POST['nama'];
    $kelas   = $_POST['kelas'];
    $alamat  = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $pangkat = $_POST['pangkat'];
    
    // Query untuk Insert
    $SQL = $conn -> prepare("UPDATE biodata SET nama =?, kelas=?, alamat=?, jurusan=?, pangkat=? WHERE id=?");
    $SQL -> bind_param("sssssi",$nama,$kelas,$alamat,$jurusan,$pangkat,$id);
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