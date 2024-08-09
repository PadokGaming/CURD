

 <?php
if (isset($_POST["submit"])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_blob8";

    $conn = new mysqli($host, $user, $password, $database);


    if ($conn->connect_error) {
        die("Koneksi ke basis data gagal: " . $conn->connect_error);
    }

    $image = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
    $image = $conn->real_escape_string($image);

    $imageSize = $_FILES["fileToUpload"]["size"];
    $imageType = $_FILES["fileToUpload"]["type"];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO images (image, size, type, keterangan) VALUES ('$image', $imageSize, '$imageType','$keterangan')";

    if ($conn->query($sql) === TRUE) {
        header("Location: tampil.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil</title>

    <!-- link css bootstrap online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- link style css  -->
    <link rel="stylesheet" href="style.css">

    <!-- link bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- link box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>
  <body>

    <!-- awal navbar -->

    <nav class="navbar navbar-expand-lg bg-dark fixed-top border border-2 border-white">
      <div class="container-fluid">
        <img src="img/logo.jpg" alt="logo" width="40" height="30" class="rounded me-2">
        <a class="navbar-brand text-light bg-body rounded border border-2 border-danger" href="#"><b><span class="text-danger">Galeri</span><span class="text-info">TMM</span><span class="text-dark">3B</span> </b></a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5">
             <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="team.php">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-danger" href="#">Tampil</a>
            </li>
          </ul>          
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->


    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner ">
        <div class="carousel-item active ">
          <img src="img/banner (3).jpg" class="d-block w-100" style="height: 100vh; width: auto;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2 class=""><span class="bg-dark px-1 rounded shadow-lg text-white border border-2 border-danger">TEKNIK MULTIMEDIA KELAS 3 B</span></h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/banner (1).jpg" class="d-block w-100" style="height: 100vh; width: auto;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2 class=""><span class="bg-dark px-1 rounded shadow-lg text-white border border-2 border-danger">JURUSAN MANAJEMEN INFORMATIKA</span></h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/banner (2).jpg" class="d-block w-100" style="height: 100vh; width: auto;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2 class=""><span class="bg-dark px-1 rounded shadow-lg text-white border border-2 border-danger">POLITEKNIK NEGERI SAMBAS</span></h2>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <section class=" bg-dark" id="awal">
      <div class="container text-light" >
        <div class=" row justify-content-center align-items-center" style="height: 100vh;">
          <div class="col-5 col-md-5 col-lg-5">
            <h3>TEKNIK MULTIMEDIA KELAS 3 B</h3>
            <p>Foto bersama, pada saat mata kuliah fotografi desain..</p>
          </div>
          <div class="col-7 col-md-7 col-lg-7">
            <video src="img/1.mp4" class="border border-3 border-white shadow-lg" style="width: 100%; height: 100%; border-radius: 30px;" autoplay muted controls loop>
            </video>
          </div>
        </div>
      </div>
    </section>


    <!-- tabel php menampilkan data hasil dari inputan upload -->

    <section class="bg-secondary py-4" style="height: auto;" id="tampil">
      <div class="container" >
        <div class="text-center">
          <a href="index.php#akhir" class="btn btn-success text-white mb-4 border border-2 border-white" role="button"><i class='bx bx-upload bx-flashing mx-1' style='color:#ffffff' ></i>Upload Gambar</a>
        </div>

        <table class="table table-bordered table-warning table-hover py-3 border border-4 border-dark">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Gambar</th>
              <th>Ukuran</th>
              <th>Tipe</th>
              <th>Tindakan</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $host = "localhost";
              $user = "root";
              $password = "";
              $database = "db_blob8";
              $conn = new mysqli($host, $user, $password, $database);
              if ($conn->connect_error) {
                die("Koneksi ke basis data gagal: " . $conn->connect_error);
              }
              $sql = "SELECT * FROM images";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo '<td><img src="data:' . $row['type'] . ';base64,' . base64_encode($row['image']) . '" width="100" /></td>';
                  echo "<td>" . $row['size'] . " bytes</td>";
                  echo "<td>" . $row['type'] . "</td>";
                  echo '<td><a href="download.php?id=' . $row['id'] . '" class="btn btn-primary border border-2 border-warning">Download</a> | <a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger border border-2 border-warning">Hapus</a></td>';
                  echo "<td>" . $row['keterangan'] . "</td>";
                  echo "</tr>";
                }
              }
              $conn->close();
            ?>
          </tbody>
        </table>
      </div>
    </section>




    <!-- awal footer -->
      <footer class="bg-dark text-white rounded py-3 border border-3 border-light" style="width: 100%; height: 25vh;">
          <h4 class="text-center">PROGRAM STUDI TEKNIK MULTIMEDIA <br>JURUSAN MANAJEMEN INFORMATIKA <br>POLITEKNIK NEGERI SAMBAS <br>2023</h4>
      </footer>
    <!-- akhir footer -->

    

    <!-- link js bootstrap online -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>




