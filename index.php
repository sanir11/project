<?php
  require 'functions.php';

  $user = mysqli_fetch_assoc($a);
  $about = mysqli_fetch_assoc($b);

  $projects = data ("SELECT * FROM project");
  ?>

  <?php
    if(isset($_POST["submit"])){

      if(tambah($_POST) > 0){
        echo "
            <script>
              alert('data sudah terkirim')
            </script>
            ";
       }
      else{
        echo "
        <script>
          alert('gagal kirim');
        </script>
        ";
       }
     }
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- My CSS-->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-secondary">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin/index.php"><i class="bi bi-gear-fill"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir navbar -->
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
      <img src="foto/<?=$user["foto"];?>" alt="" width="200px" class="rounded-circle"  data-aos="zoom-in-up"  data-aos-offset="200"/>
      <h1 class="display-4"><?=$user["nama"];?></h1>
      <p class="lead"><?=$user["jabatan"];?> | <?=$user["perusahaan"];?></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill=" rgb(88, 185, 185)"
          fill-opacity="1"
          d="M0,64L34.3,58.7C68.6,53,137,43,206,80C274.3,117,343,203,411,202.7C480,203,549,117,617,112C685.7,107,754,181,823,181.3C891.4,181,960,107,1029,69.3C1097.1,32,1166,32,1234,48C1302.9,64,1371,96,1406,112L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
        ></path>
      </svg>
    </div>
    <!-- Akhir Jumbotron -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill=" rgb(88, 185, 185)"
        fill-opacity="1"
        d="M0,64L34.3,58.7C68.6,53,137,43,206,80C274.3,117,343,203,411,202.7C480,203,549,117,617,112C685.7,107,754,181,823,181.3C891.4,181,960,107,1029,69.3C1097.1,32,1166,32,1234,48C1302.9,64,1371,96,1406,112L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
      ></path>
    </svg>
    <!-- about -->
    <section id="About">
      <div class="row text-center" data-aos="fade-down"  data-aos-duration="3000">
        <h2> About Me </h2>
     </div>
      <div class="row justify-content-center fs-5">
        <div class="col-sm-4 "  data-aos="fade-down-right"  data-aos-duration="1000">
        <p><?= $about["column1"];?></p>
         </div>
        <div class="col-sm-4 "  data-aos="fade-down-left"  data-aos-duration="1000">
        <p><?= $about["column2"];?></p>
      </div>
    </section>
    <!-- Akhir About -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#fff"
        fill-opacity="1"
        d="M0,64L34.3,58.7C68.6,53,137,43,206,80C274.3,117,343,203,411,202.7C480,203,549,117,617,112C685.7,107,754,181,823,181.3C891.4,181,960,107,1029,69.3C1097.1,32,1166,32,1234,48C1302.9,64,1371,96,1406,112L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
      ></path>
    </svg>
    <!-- project -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill=" rgb(88, 185, 185)"
        fill-opacity="1"
        d="M0,64L34.3,58.7C68.6,53,137,43,206,80C274.3,117,343,203,411,202.7C480,203,549,117,617,112C685.7,107,754,181,823,181.3C891.4,181,960,107,1029,69.3C1097.1,32,1166,32,1234,48C1302.9,64,1371,96,1406,112L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
      ></path>
    </svg>
    <section id="project">
      <div class="container">
        <div class="row text-center" data-aos="fade-down"  data-aos-duration="3000">
          <h2 class="text-white">Project Me</h2>
        </div>
        <div class="row justify-content-evenly">
            <?php foreach ($projects as $pro) { ?>
            <div class="col-sm-4"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
              <div class="card">
                <img src="foto/<?= $pro["foto"];?>" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h2 class="display-5"><?= $pro["nama"];?></p></h2>
                  <p class="card-text"><?= $pro["keterangan"];?></p>
                </div>
             </div>
            </div>
         <?php }?>

        </div>
      </div>
    </section>
    <!-- akhir project -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill=" rgb(88, 185, 185)"
        fill-opacity="1"
        d="M0,64L34.3,58.7C68.6,53,137,43,206,80C274.3,117,343,203,411,202.7C480,203,549,117,617,112C685.7,107,754,181,823,181.3C891.4,181,960,107,1029,69.3C1097.1,32,1166,32,1234,48C1302.9,64,1371,96,1406,112L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
      ></path>
    </svg>
    <!-- contact -->
    <section id="Contact">
      <div id="container pt-5">
        <div class="row justify-text-center">
          <div class="row text-center" data-aos="fade-down" data-aos-duration="2000">
            <h2>Contact</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-5"  data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" placeholder="email harus diisi" name="email" class="form-control"  id="email" aria-describedby="emailHelp" />
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" placeholder="isi nama anda" name="nama" id="nama" required/>
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-control">Pesan</label>
                  <textarea class="form-control" placeholder="isi pesan anda" name="pesan" id="pesan" style="height: 100px" required></textarea>
                </div>
                <button name="submit"  type="submit"  class="btn btn-primary mt-4">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#6c757d"
          fill-opacity="1"
          d="M0,64L34.3,58.7C68.6,53,137,43,206,80C274.3,117,343,203,411,202.7C480,203,549,117,617,112C685.7,107,754,181,823,181.3C891.4,181,960,107,1029,69.3C1097.1,32,1166,32,1234,48C1302.9,64,1371,96,1406,112L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <footer class="text-center bg-secondary text-black pb-5">
      <p>Create with <i class="bi bi-heart-fill"></i> by <a href="">SR</a></p>
      <p><i class="bi bi-telegram"></i> <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a></i> <i class="bi bi-whatsapp"></i> <i class="bi bi-twitter"></i></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>
