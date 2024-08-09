<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

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
              <a class="nav-link active text-danger" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="team.php">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#tengah">Blob</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#akhir">Upload</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="tampil.php">Tampil</a>
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
          <img src="img/banner (1).jpg" class="d-block w-100" style="height: 100vh; width: auto;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2 class=""><span class="bg-dark px-1 rounded shadow-lg text-white border border-2 border-danger">TEKNIK MULTIMEDIA KELAS 3 B</span></h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/banner (2).jpg" class="d-block w-100" style="height: 100vh; width: auto;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2 class=""><span class="bg-dark px-1 rounded shadow-lg text-white border border-2 border-danger">JURUSAN MANAJEMEN INFORMATIKA</span></h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/banner (3).jpg" class="d-block w-100" style="height: 100vh; width: auto;" alt="...">
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
            <p>Tugas kelompok pertama saat masih menjadi mahasiswa baru..</p>
          </div>
          <div class="col-7 col-md-7 col-lg-7">
            <video src="img/2.mp4" class="border border-3 border-white shadow-lg" style="width: 100%; height: 100%; border-radius: 30px;" autoplay muted controls loop>
            </video>
          </div>
        </div>
      </div>
    </section>

    <section class=" bg-light" id="tengah"> 
      <div class="container text-dark">
        <div class=" row justify-content-center align-items-center" style="height: 100vh;">
          <div class="col-6 col-md-6 col-lg-6 pt-5 align-items-center">
            <img src="img/p22.png" style="width: 100%; height: 100%;" alt="">
          </div>
          <div class="col-6 col-md-6 col-lg-6 border border-3 border-info rounded p-4">
            <h1 class="">BLOB</h1>
            <h3>Apa itu Tipe data Blob..?</h3>
            <p style="font-size: 20px; font-weight: 100px" align="justify">Tipe data BLOB adalah tipe data MySQL yang dapat menyimpan data biner seperti gambar, multimedia, dan file PDF. Tipe data BLOB memiliki beberapa jenis, seperti TINYBLOB, BLOB, MEDIUMBLOB, dan LONGBLOB, yang berbeda dalam jumlah maksimum data yang dapat ditampung, Tipe data BLOB dapat digunakan untuk menampung data yang tidak dapat ditampung oleh tipe data lain, seperti data tanggal atau karakter</p>
            <button type="button" class="btn btn-dark border border-2 border-info"><a class="text-light" href="https://sis.binus.ac.id/2023/07/12/blob-tipe-data-yang-perlu-anda-ketahui/#:~:text=BLOB%20atau%20Binary%20Large%20Object,ataupun%20disimpan%20ke%20dalam%20database." style="text-decoration: none;">Read more</a></button>
          </div>
        </div>
      </div>
    </section>

    <section class=" bg-secondary" id="akhir">
      <div class="container text-white">
        <div class=" row d-flex justify-content-center  align-items-center" style="height: 100vh;">
          <div class="col-6 col-md-6 col-lg-6">
            <div class="text-center" style="font-size: 150px;">
               <i class='bx bx-cloud-upload bx-tada' style='color:lightblue;' ></i>
            </div>
              <h1 class="text-center mb-4">Upload Your Foto</h1>
            
            <form method="post" action="tampil.php#tampil" enctype="multipart/form-data" class=" border border-3 border-white rounded p-4 shadow-lg mb-5" style="background-color: brown;">
              <div class="mb-3">
                <label for="formFile" class="form-label"><b>Pilih Foto</b></label>
                <input type="file" name="fileToUpload" id="fileToUpload">
              </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><b>Nama</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary border border-2 border-white" name="submit" value="Upload Gambar">Upload <i class='bx bx-upload bx-flashing mx-1' style='color:#ffffff' ></i></button>
            </form>

          </div>
          <div class="col-5 col-md-5 col-lg-5 offset-1 mt-5">
            <img src="img/p41.png" style="width: 100%; height: 100%;" alt="">
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