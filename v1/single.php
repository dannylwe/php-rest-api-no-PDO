<?PHP 
    require_once('connection.php');
    
    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    //Query untuk Tampil 
    $SQL = $conn -> prepare("SELECT * FROM biodata WHERE id=? ORDER BY id ASC");
    $SQL -> bind_param("i",$id);
    $SQL -> execute(); 
    $hasil = $SQL->get_result();
    $users = $hasil->fetch_all(MYSQLI_ASSOC);

    foreach($users as $key =>$seluruhhasil) {
        echo json_encode(array($seluruhhasil));
    }
    } else {
    echo "data tidak ditemukan";
    
}
// for more on bind_param and prepared statements
// https://websitebeaver.com/prepared-statements-in-php-mysqli-to-prevent-sql-injection
 ?>