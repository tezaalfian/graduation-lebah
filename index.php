<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Happy Graduation | Lebah Idaman</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/favicon.ico" rel="apple-touch-icon">
  <meta name="description" content="Lebah Idaman">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.min.css">
  <link href="assets/vendor/aos/aos.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/lg/lightgallery-bundle.min.css">
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
      <?php
      $testi = [
        [
          'name' => 'Rahmat Dipo Setyadin,. S.T',
          'aka' => '_Julukan_',
          'ket' => 'Hallo bang!! Bang dipo yang gasuka nasi wkwk. Yang paling diinget dari bang dipo itu kalo pas lagi meeting mingguan pasti suka di tinggal anggotanya wkw, yaa Namanya juga lagi online yaa bang (tapi mohon maaf yaa bang hehe itu antara sengaja dan tidak wkwk). Bang dipo kalo ke lab pasti suka diem dulu sok cool habis tu baru bisa random di tanya – tanya (gatau tuh kenapa), tapi kalo bahas sesuatu seru banget pasti bang dipo ngasi saran terbaik. Bang dipo ituuu kalo di avangers kayak captain America, gatau juga ni kenapa mungkin karena koor kali ya wkwk. Bang dipo dulu sering di gosipin sama anak kelas F AP 1 katanya abang aslabnya ganteng wkw, gausa kepedean bang soalnya yang gosipin owen wkwk tapi kalo di liat -  liat emang cakep si haha. Yakali pas wisuda ga cakep yaa bang. Ga kerasa yaaa, bang dipo udah gede aja ehh wkkw, maksudnya uda lulus nii uda wisuda dan uda officially punya gelar S.T. Do’anya sukses terus aja si bang, tapi jan sombong – sombong laa bang! Main la ke lab ya, main uno kitaaa ',
          'foto' => 'assets/img/dipo.png'
        ],
        [
          'name' => 'M. Luthfi Arsyad,. S.T',
          'aka' => '_Julukan_',
          'ket' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
          'foto' => 'assets/img/luthfi.png'
        ],
        [
          'name' => 'Brigita Tiora,. S.T',
          'aka' => '_Julukan_',
          'ket' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
          'foto' => 'assets/img/brigi.png'
        ],
        [
          'name' => 'Ayu Rizkyca Awalia,. S.T',
          'aka' => '_Julukan_',
          'ket' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
          'foto' => 'assets/img/ayu.png'
        ],
        [
          'name' => 'Lailil Ayu Fitriyah,. S.T',
          'aka' => '_Julukan_',
          'ket' => 'lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.',
          'foto' => 'assets/img/lailil.png'
        ],
      ];
      ?>
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-md-9 text-center">
          <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
              <?php foreach ($testi as $val) : ?>
                <div class="swiper-slide">
                  <div class="img-cover">
                    <img src="<?= $val['foto'] ?>" alt="<?= $val['name'] ?>" class="img-fluid" loading="lazy">
                  </div>
                  <h2 class="pacifico"><?= $val['name'] ?></h2>
                  <h4><?= $val['aka'] ?></h4>
                  <p class="dancing">"<?= $val['ket'] ?>"</p>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
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
              $photos[] = [
                'photo' => $dir . "/" . $file,
                'alt' => $file
              ];
            }
          }
          closedir($dh);
        }
      }
      ?>
      <hr>
      <div class="row" id="lightgallery" data-aos="fade-up" data-aos-delay="100">
        <?php foreach ($photos as $val) : ?>
          <a class="col-md-3 col-6 mb-3" href="<?= $val['photo'] ?>" data-lg-size="1024-800">
            <img alt="<?= $val['alt'] ?>" src="<?= $val['photo'] ?>" class="img-thumbnail" loading="lazy"/>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <button class="btn btn-dark btn-lg" id="btn-play" data-play="0">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
      <path d="m21.707 20.293-2.023-2.023A9.566 9.566 0 0 0 21.999 12c0-4.091-2.472-7.453-5.999-9v2c2.387 1.386 3.999 4.047 3.999 7a8.113 8.113 0 0 1-1.672 4.913l-1.285-1.285C17.644 14.536 18 13.19 18 12c0-1.771-.775-3.9-2-5v7.586l-2-2V4a1 1 0 0 0-1.554-.832L7.727 6.313l-4.02-4.02-1.414 1.414 18 18 1.414-1.414zM12 5.868v4.718L9.169 7.755 12 5.868zM4 17h2.697l5.748 3.832a1.004 1.004 0 0 0 1.027.05A1 1 0 0 0 14 20v-1.879l-2-2v2.011l-4.445-2.964c-.025-.017-.056-.02-.082-.033a.986.986 0 0 0-.382-.116C7.059 15.016 7.032 15 7 15H4V9h.879L3.102 7.223A1.995 1.995 0 0 0 2 9v6c0 1.103.897 2 2 2z"></path>
    </svg>
  </button>

  <audio id="myAudio">
    <source src="assets/sound/backsound.mp3" type="audio/mpeg">
    <source src="assets/sound/backsound.ogg" type="audio/ogg">
  </audio>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.min.js"></script>
  <script src="assets/vendor/lg/lightgallery.min.js"></script>
  <script src="assets/vendor/lg/lg-zoom.min.js"></script>
  <script src="assets/vendor/lg/lg-thumbnail.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>