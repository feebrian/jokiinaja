<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JokiinAja | Paket Joki</title>

  <!-- include cdn link -->
  <?php include("../include/cdn.php") ?>

  <!-- CSS Link -->
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

  <?= include("../include/partials/navbar.php") ?>

  <!-- Main Content Start -->
  <main>

    <!-- Pricing start -->
    <section id="pricing">
      <div class="container">
        <div class="row">

          <!-- Step by Step Start -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                Joki Rank di JOKIINAJA
              </div>
              <div class="card-body">
                <h3>Joki Rank Paketan</h3>
                <!-- <p>Jasa Joki Rank Mobile Legend Paketan Auto Win Streak</p> -->
                <ol>
                  <li>Lengkapi Data Joki dengan Teliti</li>
                  <li>Pilih Paket Joki</li>
                  <li>Pilih Metode Pembayaran</li>
                  <li>Tulis nomor WhatsApp yg benar!</li>
                  <li>Klik ORDER NOW & lakukan Pembayaran</li>
                  <li>Admin akan menginformasikan melalui Whatsapp saat jokian dikerjakan/selesai</li>
                </ol>
              </div>
            </div>
          </div> <!-- Step by Step End-->


          <!-- Pricing Card -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                Lengkapi Data
              </div>

              <!-- Card Body Start -->
              <form method="post" action="proses-input.php"> <!-- Form Start -->
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="email" class="form-label">Alamat Email</label>
                      <input type="email  " name="email" class="form-control" placeholder="Email address" aria-label="Email address" required>
                    </div>
                    <div class="col-md-6">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="login" class="form-label">Login</label>
                      <select class="form-select" name="login" required>
                        <option value="Moonton">Moonton(Rekomendasi)</option>
                        <option value="Google">Google</option>
                        <option value="Facebook">Facebook</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="nickname" class="form-label">Nickname</label>
                      <input type="text" class="form-control" name="nickname" placeholder="Nickname" aria-label="Nickname" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="request" class="form-label">Request</label>
                      <input type="text" class="form-control" name="request" placeholder="Min Request 3 Hero" aria-label="Request Hero" required>
                    </div>
                    <div class="col-md-6">
                      <label for="note" class="form-label">Catatan</label>
                      <input type="text" class="form-control" name="note" placeholder="Catatan" aria-label="Catatan" required>
                    </div>
                  </div>

                </div> <!-- Card Body End -->
            </div>
          </div>
        </div>

        <!-- Rank List Start -->
        <section id="rank-list">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  Pilih Nominal
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="gm5-epc5" style="display: none;" value="Grandmaster 5 - Epic 5">
                        <label for="gm5-epc5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Grandmaster 5 - Epic 5</p>
                              <p class="rank-nominal mb-0">Rp. 125.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/grandmaster.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="gm5-lgnd5" style="display: none;" value="Grandmaster 5 - Legend 5">
                        <label for="gm5-lgnd5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Grandmaster 5 - Legend 5</p>
                              <p class="rank-nominal mb-0">Rp. 337.500</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/grandmaster.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="gm5-myt5" style="display: none;" value="Grandmaster 5 - Mytic 5">
                        <label for="gm5-myt5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Grandmaster 5 - Mytic 5</p>
                              <p class="rank-nominal mb-0">Rp. 575.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/grandmaster.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc5-lgnd5" style="display: none;" value="Epic 5 - Legend 5">
                        <label for="epc5-lgnd5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 5 - Legend 5</p>
                              <p class="rank-nominal mb-0">Rp. 212.500</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc4-lgnd5" style="display: none;" value="Epic 4 - Legend 5">
                        <label for="epc4-lgnd5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 4 - Legend 5</p>
                              <p class="rank-nominal mb-0">Rp. 170.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc3-lgnd5" style="display: none;" value="Epic 3 - Legend 5">
                        <label for="epc3-lgnd5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 3 - Legend 5</p>
                              <p class="rank-nominal mb-0">Rp. 127.500</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc2-lgnd5" style="display: none;" value="Epic 2 - Legend 5">
                        <label for="epc2-lgnd5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 2 - Legend 5</p>
                              <p class="rank-nominal mb-0">Rp. 85.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc1-lgnd5" style="display: none;" value="Epic 1 - Legend 5">
                        <label for="epc1-lgnd5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 1 - Legend 5</p>
                              <p class="rank-nominal mb-0">Rp. 42.500</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc5-myt5" style="display: none;" value="Epic 5 - Mytic 5">
                        <label for="epc5-myt5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 5 - Mytic 5</p>
                              <p class="rank-nominal mb-0">Rp. 450.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc4-myt5" style="display: none;" value="Epic 4 - Mytic 5">
                        <label for="epc4-myt5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 4 - Mytic 5</p>
                              <p class="rank-nominal mb-0">Rp. 407.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc3-myt5" style="display: none;" value="Epic 3 - Mytic 5">
                        <label for="epc3-myt5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 3 - Mytic 5</p>
                              <p class="rank-nominal mb-0">Rp. 365.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc2-myt5" style="display: none;" value="Epic 2 - Mytic 5">
                        <label for="epc2-myt5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 2 - Mytic 5</p>
                              <p class="rank-nominal mb-0">Rp. 322.500</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="epc1-myt5" style="display: none;" value="Epic 1 - Mytic 5">
                        <label for="epc1-myt5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Epic 1 - Mytic 5</p>
                              <p class="rank-nominal mb-0">Rp. 280.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/epic.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="lgd-5-myt-5" style="display: none;" value="Legend 5 - Mytic 5">
                        <label for="lgd-5-myt-5">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Legend 5 - Mytic 5</p>
                              <p class="rank-nominal mb-0">Rp. 237.500</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/legend.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="myt-grading" style="display: none;" value="Mytic Grading (Auto Mytic 4)">
                        <label for="myt-grading">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Mytic Grading (Auto Mytic 4)</p>
                              <p class="rank-nominal mb-0">Rp. 237.500</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/mytical-glory.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="myt-5-600" style="display: none;" value="Mytic 5 - Mytic Glory 600">
                        <label for="myt-5-600">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Mytic 5 - Mytic Glory 600</p>
                              <p class="rank-nominal mb-0">Rp. 1.500.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/mytical-glory.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="myt-5-1000" style="display: none;" value="Mytic 5 - Mytic Glory 1000">
                        <label for="myt-5-600">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Mytic 5 - Mytic Glory 1000</p>
                              <p class="rank-nominal mb-0">Rp. 3.600.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/mytical-glory.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                      <div class="card form-input">
                        <input type="radio" name="rank" id="mytg-600-1000" style="display: none;" value="Mytic Glory 600 - Glory 1000">
                        <label for="mytg-600-1000">
                          <div class="card-body d-flex justify-content-between">
                            <div class="card-text">
                              <p class="rank-tier mb-0 fw-bold">Mytic Glory 600 - Glory 1000</p>
                              <p class="rank-nominal mb-0">Rp. 2.100.000</p>
                            </div>
                            <div class="card-img-wrapper d-flex justify-content-end">
                              <img src="../img/rank/mytical-glory.png" alt="mytical-glory" class="card-img" width="50" height="32">
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>


                    







                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Rank List End -->



        <!-- Payment method Start -->
        <section id="payment-method">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="payment-method col-md-8">
              <div class="card">
                <div class="card-header">
                  Pilih Pembayaran
                </div>
                <div class="card-body">

                  <!-- accordion start -->
                  <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          E-Wallet
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">

                          <div class="row">
                            <div class="col-sm-4 mb-3">
                              <div class="card form-input">
                                <input type="radio" name="payment" id="payment-gopay" style="display: none;" value="Gopay">
                                <label for="payment-gopay">
                                  <div class="card-body d-flex justify-content-between">
                                    <div class="card-text">
                                      <p class="rank-tier mb-0 fw-bold">Gopay</p>
                                    </div>
                                    <div class="card-img-wrapper d-flex justify-content-end">
                                      <img src="../img/payment/gopay.png" alt="mytical-glory" class="card-img" width="50" height="32">
                                    </div>
                                  </div>
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-4 mb-3">
                              <div class="card form-input">
                                <input type="radio" name="payment" id="payment-ovo" style="display: none;" value="OVO">
                                <label for="payment-ovo">
                                  <div class="card-body d-flex justify-content-between">
                                    <div class="card-text">
                                      <p class="rank-tier mb-0 fw-bold">OVO</p>
                                    </div>
                                    <div class="card-img-wrapper d-flex justify-content-end">
                                      <img src="../img/payment/ovo.png" alt="mytical-glory" class="card-img" width="50" height="32">
                                    </div>
                                  </div>
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-4 mb-3">
                              <div class="card form-input">
                                <input type="radio" name="payment" id="payment-dana" style="display: none;" value="Dana">
                                <label for="payment-dana">
                                  <div class="card-body d-flex justify-content-between">
                                    <div class="card-text">
                                      <p class="rank-tier mb-0 fw-bold">Dana</p>
                                    </div>
                                    <div class="card-img-wrapper d-flex justify-content-end">
                                      <img src="../img/payment/dana.png" alt="mytical-glory" class="card-img" width="50" height="32">
                                    </div>
                                  </div>
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-4 mb-3">
                              <div class="card form-input">
                                <input type="radio" name="payment" id="payment-shoopepay" style="display: none;" value="ShopeePay">
                                <label for="payment-shoopepay">
                                  <div class="card-body d-flex justify-content-between">
                                    <div class="card-text">
                                      <p class="rank-tier mb-0 fw-bold">ShopeePay</p>
                                    </div>
                                    <div class="card-img-wrapper d-flex justify-content-end">
                                      <img src="../img/payment/sPay.png" alt="mytical-glory" class="card-img" width="50" height="32">
                                    </div>
                                  </div>
                                </label>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- accordion end -->

                </div>
              </div>
            </div>
          </div>
        </section><!-- Payment method End -->

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-8">
            <!-- submit button -->
            <button type="submit" class="btn btn-danger  mt-2"><i class='bx bx-cart bx-fw'></i>Order</button>
            </form> <!-- Form End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing end -->

  </main>
  <!-- Main Content End -->

  <!-- Footer Start -->
  <footer>
    <div class="content-container container">

      <div class="footer-title">
        <h2>JOKIINAJA</h2>
      </div>

      <div class="link-wrapper">
        <ul class="link">
          <li>
            <h3>Useful Link</h3>
          </li>
          <li>Home</li>
          <li>About</li>
          <li>Pricing</li>
          <li>Contact</li>
        </ul>
        <ul class="social-link">
          <li>
            <h3>Social Link</h3>
          </li>
          <li><a href="https://instagram.com" class="social-link">Instagram</a></li>
          <li><a href="https://Facebook.com" class="social-link">Facebook</a></li>
          <li><a href="https://.com" class="social-link"></a></li>
        </ul>
      </div>
    </div>
  </footer> <!-- footer end -->
  <?php include("../include/cdn-js.php"); ?>
  <script src="../js/main.js"></script>

  <!--Ionicons-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>