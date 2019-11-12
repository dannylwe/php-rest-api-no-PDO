<?PHP 
    require_once('connection.php');
    
    //Query untuk Tampil 
    $SQL = mysqli_query($conn, "SELECT * FROM biodata ORDER BY id ASC");
    
    $result = array();
    while($row = mysqli_fetch_array($SQL)){
        array_push($result, array(
            'id' => $row['id'],
            'nama' => $row['nama'],
            'kelas' => $row['kelas'],
            'alamat' => $row['alamat'],
            'jurusan' => $row['jurusan'],
            'pangkat' => $row['pangkat']
        ));
    }
    echo json_encode(array($result));

    mysqli_close($conn);

 ?>