<?php
    require_once('connection.php');
    
    if(isset($_POST['id'])) {
        
    $id    = $_REQUEST['id'];
    
    //Query untuk Delete
    //$SQL = mysqli_query($conn, "DELETE FROM biodata WHERE id='$id' ");

    $SQL = $conn -> prepare("DELETE FROM biodata WHERE id=?");
    $SQL -> bind_param("i",$id);
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