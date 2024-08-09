<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_blob8";
    
    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi ke basis data gagal: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM images WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imageData = $row["image"];
        $imageType = $row["type"];
        $imageSize = $row["size"];

        // Atur header untuk tipe konten yang benar dan nama file
        header("Content-type: $imageType");
        header("Content-Disposition: attachment; filename=downloaded_image.jpg");
        header("Content-Length: $imageSize");

        // Keluarkan data gambar ke output
        echo $imageData;
    } else {
        echo "Gambar tidak ditemukan.";
    }

    $conn->close();
} else {
    echo "ID gambar tidak valid.";
}
?>
