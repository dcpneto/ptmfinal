<?php
header('Access-Control-Allow-Origin: *');
$target_path = "uploads/";
 
$target_path = $target_path . basename( $_FILES['file']['name']);
 
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    header('Content-type: application/json');
    $data = ['success' => true, 'message' => 'Upload com sucesso'];
    echo json_encode( $data );
} else{
    header('Content-type: application/json');
    $data = ['success' => false, 'message' => 'Houve um erro. Tente novamente.'];
    echo json_encode( $data );
}
 
?>