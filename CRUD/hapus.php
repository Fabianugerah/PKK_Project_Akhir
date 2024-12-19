<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM barang WHERE id = $id";
if ($conn->query($query) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
