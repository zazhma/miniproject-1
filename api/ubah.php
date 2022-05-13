<?php
require_once('../config/koneksi.php');
if (isset($_POST['id'])) {
    $id       = $_POST['id'];
    $status            = $_POST['status'];
    $kelas            = $_POST['kelas'];
    $password            = $_POST['password'];
    $sql = $conn->prepare("UPDATE user SET status=?, kelas=?, password=? WHERE id=?");
    $sql->bind_param('sssd',$status, $kelas, $password,$id);
    $sql->execute();
    if ($sql) {
}
        //echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location: http://localhost/db_spd/pages/profil.php");
        echo json_encode(array('RESPONSE' => 'FAILED'));
    } else {
    }
    echo "GAGAL";