<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Happy Graduation | Lebah Idaman</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/favicon.ico" rel="apple-touch-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
</head>

<body>
  <header class="text-white">
    <div class="container text-center">
      <h1 class="display-1" data-aos="fade-up">Happy Graduation</h1>
      <h1 class="display-3 pacifico" data-aos="fade-up" data-aos-delay="100"><?= empty($_GET['to']) ? 'Lebah Idaman' : $_GET['to'] ?></h1>
      <p data-aos="fade-up" class="dancing" data-aos-delay="200">"Tidak ada yang pergi dari hati. Tidak ada yang hilang dari sebuah kenangan"</p>
    </div>
  </header>

  <section class="height-100 py-5">
    <div class="container">
      <h1 class="text-center display-4" data-aos="fade-up">Selamat S.T Para Lebah Idaman</h1>
      <hr>
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-md-7 text-center">
          <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="img-cover">
                  <img src="assets/img/dipo.jpg" alt="Dipo" class="img-fluid">
                </div>
                <h2 class="pacifico">Rahmat Dipo Setyadin,. S.T</h2>
                <h4>_Julukan_</h4>
                <p class="dancing">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga consequatur eos nemo est autem quisquam non veritatis illo eius, esse mollitia laborum cum, vitae maiores atque error officia! Est, aliquam."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="height-100 py-5">
    <div class="container">
      <h1 class="text-center display-4" data-aos="fade-up">From Us To You</h1>
      <?php
      $dir = "assets/img/ucapan";
      $photos = [];
      if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
          while (($file = readdir($dh)) !== false) {
            if ($file != "." && $file != "..") {
              $photos[] = $dir . "/" . $file;
            }
          }
          closedir($dh);
        }
      }
      ?>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="row justify-content-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper testimonials-slider">
                <div class="swiper-wrapper">
                  <?php foreach ($photos as $val) : ?>
                    <div class="swiper-slide">
                      <img src="<?= $val ?>" alt="Ucapan" class="img-thumbnail">
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>