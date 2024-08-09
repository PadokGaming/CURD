<?php
if (isset($_GET["id"])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_blob8";

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi ke basis data gagal: " . $conn->connect_error);
    }

    $id = $_GET["id"];
    $sql = "DELETE FROM images WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: tampil.php#tampil");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
