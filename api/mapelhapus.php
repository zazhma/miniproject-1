<?php
require_once('../config/test.php');

if (isset($_GET['id'])) {
    $id  = $_GET['id'];
    $sql = $conn->prepare("DELETE FROM pelajaran WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();
    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location: http://localhost/db_spd/pages/ruangk.php");
    } else {
    }
            echo json_encode(array('RESPONSE' => 'FAILED'));
        }
    else 
        echo "GAGAL";