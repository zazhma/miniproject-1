<?php
require_once('../config/test.php');
if (isset($_POST['mapel']) && isset($_POST['guru']) && isset($_POST['keterangan'])){
    $mapel    = $_POST['mapel'];
    $guru  = $_POST['guru'];
    $sql = $conn->prepare("INSERT INTO pelajaran (mapel, guru, keterangan) VALUES (?, ?, ?)");
    $keterangan    = $_POST['keterangan'];
    $sql->bind_param('sss', $mapel, $guru, $keterangan); 
    $sql->execute();
    if ($sql) {
     echo json_encode(array('RESPONSE' => 'FAILED'));
     echo json_encode(array('RESPONSE' => 'SUCCESS'));
     header("location:http://localhost/db_spd/pages/ruangk.php");
    }
    }
    else {
    echo "GAGAL";
   }
?>