<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team</title>

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
              <a class="nav-link active text-danger" href="#">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="tampil.php">Tampil</a>
            </li>
          </ul>          
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->

    <section class="mt-5 bg-secondary" >
      <div class="container mt-3 pb-5 text-white">
        <br>
        <h1 class="mt-5 text-center">~Our<span class="text-danger bg-light rounded border border-2 border-danger px-1">Team</span>~</h1>
        <div class="row mt-2 justify-content-center align-items-center">
          <div class="col-3 col-md-3 col-lg-3 mt-5">
            <img src="img/wa.jpg" class="border border-5 border-danger rounded shadow-lg" style="height: 250px; width: 100%;" alt="...">
          </div>
          <div class="col-7 col-md-7 col-lg-7 shadow-lg">
            <h3>Waritz Alfarisy</h3>
            <h5>Pengembang Php</h5>
            <p>Peran yang diambil di kelompok ini sebagai Pengembang pada bagian Php dan My Sql.</p>
          </div>
        </div>

        <div class="row mt-4 justify-content-center align-items-center">
          <div class="col-3 col-md-3 col-lg-3">
            <img src="img/m.jpg" class="border border-5 border-info rounded shadow-lg" style="height: 250px; width: 100%;" alt="...">
          </div>
          <div class="col-7 col-md-7 col-lg-7 shadow-lg">
            <h3>Miadi</h3>
            <h5>Pengembang Tampilan / User Interface</h5>
            <p>Peran yang diambil di kelompok ini sebagai Pengembang Halaman Web meliputi Html, Css dan juga Bootstrap.</p>
          </div>
        </div>

        <div class="row mt-4 justify-content-center align-items-center">
          <div class="col-3 col-md-3 col-lg-3">
            <img src="img/d.jpeg" class="border border-5 border-success rounded shadow-lg" style="height: 250px; width: 100%;" alt="...">
          </div>
          <div class="col-7 col-md-7 col-lg-7 shadow-lg">
            <h3>Dia Sari</h3>
            <h5>Dokumentasi</h5>
            <p>Peran yang diambil di kelompok ini sebagai Membuat Hasil Kesimpulam Pengerjaan Tugas.</p>
          </div>
        </div>

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