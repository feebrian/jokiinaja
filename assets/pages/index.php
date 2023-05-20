<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jokiinaja | Home</title>

  <?php include("../include/cdn.php") ?>

  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php include("../include/partials/navbar.php") ?>

  <div class="title-container">
    <div class="title">
      <div class="main-text">
        <h1><b>Jokiin<span class="color">aja</span></b></h1>
        <h3>stuck di epic? <br> jokiinaja auto mythic.</h3>
      </div>
      <div class="second-text">
        <p><span class="color">Jokiinaja</span> adalah sebuah jasa joki yang berbasis <span class="color">online</span>. <span class="color">Jokiinaja</span> berfokus pada game <span class="color">MOBA</span> seluler yang berjudul <span class="color">Mobile Legends</span>. Jokiin dulu gak sih?</p>

        <button type="button" class="btn btn-primary">
          <a href="pricing.php">
            <i class='bx bx-cart bx-fw bx-sm'></i>Order Now
          </a>
        </button>
      </div>
    </div>
  </div>

  <section id="why-choose-us">
    <div class="container">
      <div class="heading text-center p-4">
        <h1 class="fw-bold fs-1">Kenapa Memilih <span class="color">Jokiinaja</span></h1>
      </div>
      <div class="text-wrapper">
        <div class="text">
          <ul class="bx-ul">
            <li><span class="list-title"><i class='bx bx-right-arrow bx-fw'></i><b>Pemrosesan yang cepat</b></span>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae qui itaque unde voluptates?</li>
              </ul>
            </li>
            <li><span class="list-title"><i class='bx bx-right-arrow bx-fw'></i><b>Rank terjamin naik</b></span>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptas.</li>
              </ul>
            </li>
            <li><span class="list-title"><i class='bx bx-right-arrow bx-fw'></i><b>Keamanan terjaga</b></span>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="image">
          <img src="../img/rank/TV - 1.png" alt="rank-pict">
        </div>
      </div>
    </div>
  </section>

  <section id="testimonials">
    <div class="container">
      <div class="heading text-center p-4">
        <h1 class="fw-bold fs-1">Jokiinaja Testimonial</h1>
        <p class="lead">Tannggapan dari klien <span class="color">Jokiinaja</span></p>
      </div>

      <div class="row text-center">

        <div class="col-md-4">
          <div class="card">
            <div class="img">
              <img src="../img/profile.png" alt="User Pict">
              <h5 class="username text-black mt-2">Adam Febrian</h5>
            </div>
            <div class="desc">
              <p class="text-black">"Joki disini sangat cepat dan terpercaya, Recomended banget deh"</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="img">
              <img src="../img/profile.png" alt="User Pict">
              <h5 class="username text-black mt-2">Dodi Fernando</h5>
            </div>
            <div class="desc">
              <p class="text-black">"Kayaknya kemarin rank w masih epic kok sekarang uddah mythic aja ya"</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="img">
              <img src="../img/profile.png" alt="User Pict">
              <h5 class="username text-black mt-2">Ani</h5>
            </div>
            <div class="desc">
              <p class="text-black">"Temenku sampe kaget ranknya gua duluin hahaha"</p>
            </div>
          </div>
        </div>

      </div>

      <div class="row mt-3 text-center">

        <div class="col-md-4">
          <div class="card">
            <div class="img">
              <img src="../img/profile.png" alt="User Pict">
              <h5 class="username text-black mt-2">Andre Taulani</h5>
            </div>
            <div class="desc">
              <p class="text-black">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, ipsa"</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="img">
              <img src="../img/profile.png" alt="User Pict">
              <h5 class="username text-black mt-2">Jhon Wick</h5>
            </div>
            <div class="desc">
              <p class="text-black">"Lorem ipsum dolor sit amet consectetur, adipisicing elit"</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="img">
              <img src="../img/profile.png" alt="User Pict">
              <h5 class="username text-black mt-2">Thomas Gustavo</h5>
            </div>
            <div class="desc">
              <p class="text-black">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est maiores facere dolor ea"</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">

        <div class="heading text-center p-4">
          <h1 class="fw-bold">Contact Us</h1>
        </div>

        <div class="form-input">
          <form method="post" action="../mail/mail-process.php">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" name="firstname" class="form-control" id="firstname" required>
              </div>

              <div class="mb-3 col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" name="lastname" class="form-control" id="lastname" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" name="subject" class="form-control" id="subject" required>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea name="message" id="message" class="form-control" cols="30" rows="6" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <?php include("../include/partials/footer.php") ?>
  <?php include("../include/cdn-js.php") ?>
  <script src="../js/main.js"></script>
</body>

</html>