<?php
// ====================================================================================================================== //
session_start();
$_V_IP = $_SERVER['REMOTE_ADDR'];
$_EVENT_ID = md5($_V_IP . strtotime(date("Y-m-d H:i:s")));
// ====================================================================================================================== //

// Ganti kode pixel dibawah ini
$_PIXEL_ID = "2441685956039539";

// Ganti link loops dibawah ini
$_LOOP_WA = "https://mauorder.online/dzaky-nutri-wa";
$_LOOP_EMAIL = "https://mauorder.online/save-order/dzaky-nutri-form";
// https://app.loops.id/save-order/ => digunakan untuk popup yang langsung redirect ke thanks page setelah isi
// https://mauorder.online/ => digunakan untuk tombol yang klik lalu mengarah ke isi form tampilan loops
$_LOOP_EMAIL_POPUP = "https://app.loops.id/save-order/dzaky-nutri-form";
$_LOOP_EMAIL_BUTTON_POPUP = "https://mauorder.online/dzaky-nutri-form";
// ====================================================================================================================== //
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Script CDN icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scrip CSS CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Script memanggil file css -->
    <!--<link rel="stylesheet" href="src/styles/style.css" />-->
    <link href="src/styles/style.css" rel="stylesheet" type="text/css"/>
    <!-- Site Title -->
    <title>Store Sereal - Distributor Cekat</title>


    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];

            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $_PIXEL_ID; ?>');
        fbq('track', 'PageView', {}, {
            eventID: "ePV-<?php echo $_EVENT_ID; ?>"
        });
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $_PIXEL_ID; ?>&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
</head>

<div id="toast-container"></div>

<!-- <div>
        <ul style=" list-style-type: none;">
            <li><i class="fa fa-check-circle fa-6" style="color: green; font-size:48px;"></i><span> Teks disini</span>
            </li>
            <li><i class="fa fa-check-circle" style="color: green"></i><span> Teks disini</span></li>
        </ul>
    </div> -->


<!-- Navbar Request Mas Adam -->
<!-- <div class="navbar-bottom">
        <a href="#manfaat">
            <div class="row">
                <div style="font-size: 20px; margin-top: 5px;" class="col center"><i class="fa fa-star" aria-hidden="true"></i></div>
                <div class="col">Manfaat<br>Nutriflakes</div>
            </div>
        </a>
        <a href="#testi">
            <div class="row">
                <div style="font-size: 20px; margin-top: 5px;" class="col center"><i class="fa fa-thumbs-up" aria-hidden="true"></i></div>
                <div class="col">Testimoni<br>Pelanggan</div>
            </div>
        </a>
        <a href="#form">
            <div class="row">
                <div style="font-size: 20px; margin-top: 5px;" class="col center"><i class="fa fa-tags" aria-hidden="true"></i></div>
                <div class="col">Dapatkan<br>Promo</div>
            </div>
        </a>
    </div> -->

<!-- <center>
        <button class="floating-btn" onclick="redirect()">
            <img src="src/assets/whatsapp2.gif" alt="Floating Button" />
        </button>
    </center> -->

<!-- Heading to Body -->
<div class="section">
    <span><img src="src/assets/heading/lpbaru/1.png" class="img" /></span>
    <span><img src="src/assets/heading/heading 1.webp" class="img" /></span>
    <!-- <span><img src="src/assets/heading/heading 2.webp" class="img" /></span> -->
    <span><img src="src/assets/heading/heading 3.webp" class="img" /></span>
</div>

<!-- Automatic Slideshow -->
<center>
    <!--<h2>AUTOMATIC SLIDESHOW</h2> -->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="src/assets/heading/t1.jpg" style="width:100%"> <!-- ganti nama gambar sesuai dengan nama file gambar yang ada -->
        </div>

        <div class="mySlides fade">
            <img src="src/assets/heading/t2.jpg" style="width:100%"> <!-- ganti nama gambar sesuai dengan nama file gambar yang ada -->
        </div>

        <div class="mySlides fade">
            <img src="src/assets/heading/t3.jpg" style="width:100%"> <!-- ganti nama gambar sesuai dengan nama file gambar yang ada -->
        </div>

        <div class="mySlides fade">
            <img src="src/assets/heading/t4.jpg" style="width:100%"> <!-- ganti nama gambar sesuai dengan nama file gambar yang ada -->
        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</center>

<!-- Bagian Promo -->
<div class="section">
    <span><img src="src/assets/heading/lpbaru/7.webp" class="img" /></span>
    <span><img src="src/assets/heading/promo1.gif" class="img" /></span>
    <span><img src="src/assets/heading/promo2.webp" class="img" /></span>
    <span><img src="src/assets/heading/promo3.gif" class="img" /></span>
</div>

<!-- Card Gueh -->
<div id="harga" class="container my-4">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <div class="position-relative">
                        <img src="src/assets/heading/lpbaru/2box.png" class="card-img-top" alt="Nutri Flakes 2 Box">
                        <div class="badge-custom">HEMAT <b>60 RIBU</b></div>
                    </div>
                    <div class="card-body">
                    <img src="src/assets/heading/lpbaru/p2.png" alt="RP. 190.000" class="price-img">
                        <a href="#form" class="btn btn-custom">AMBIL 2 BOX</a>
                        <ul class="card-text mt-3">
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Bisa Bayar di Rumah</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Potongan harga 60.000</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Barang palsu uang kembali</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Gratis 1 E-Book (Penanganan pola makan)</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Voucher Ongkir 40.000</li>
                            <li class="checklist-item inactive"><img src="src/assets/heading/lpbaru/cross.png" alt="Check" class="checklist-img"><del>Dikemas dengan Bubble Wrap</del></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <div class="position-relative">
                        <img src="src/assets/heading/lpbaru/3box.png" class="card-img-top" alt="Nutri Flakes 3 Box">
                        <div class="badge-custom">HEMAT <b>99 RIBU</b></div>
                    </div>
                    <div class="card-body">
                    <img src="src/assets/heading/lpbaru/p3.png" alt="RP. 190.000" class="price-img">
                        <a href="#form" class="btn btn-custom">AMBIL 3 BOX</a>
                        <ul class="card-text mt-3">
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Bisa Bayar di Rumah</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Potongan harga 99.000</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Barang palsu uang kembali</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Gratis 2 E-Book (Penanganan pola makan dan penanganan Gerd)</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Voucher Ongkir 40.000</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Dikemas dengan Bubble Wrap</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <img src="src/assets/heading/lpbaru/1box.png" class="card-img-top" alt="Nutri Flakes 1 Box">
                    <div class="badge-custom">HEMAT <b>30 RIBU</b></div>
                    <div class="card-body">
                    <img src="src/assets/heading/lpbaru/p1.png" alt="RP. 190.000" class="price-img">
                        <a href="#form" class="btn btn-custom">AMBIL 1 BOX</a>
                        <ul class="card-text mt-3">
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Bisa bayar di Rumah</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Potongan Harga Rp.30.000</li>
                            <li class="checklist-item"><img src="src/assets/heading/lpbaru/checklist.png" alt="Check" class="checklist-img">Barang palsu uang kembali</li>
                            <li class="checklist-item inactive"><img src="src/assets/heading/lpbaru/cross.png" alt="Check" class="checklist-img"><del>Gratis E-Book</del></li>
                            <li class="checklist-item inactive"><img src="src/assets/heading/lpbaru/cross.png" alt="Check" class="checklist-img"><del>Voucher Ongkir 40.000</del></li>
                            <li class="checklist-item inactive"><img src="src/assets/heading/lpbaru/cross.png" alt="Check" class="checklist-img"><del>Dikemas menggunakan Bubble Wrap</del></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Bagian Box 
<div class="section" id="harga">
    <span><img src="src/assets/2box.webp" class="img" /></span> -->
     <!-- Button
<div style="display: flex; justify-content: center; padding: 0 0 5% 0">
    <a href="#form" class="buttons-ambil-promo"><span><i class=" fa fa-shopping-cart" aria-hidden="true"></i>
        </span>AMBIL 2 BOX</a>
</div> -->
    <!--<span><img src="src/assets/3box.webp" class="img" /></span> -->
     <!-- Button 
<div style="display: flex; justify-content: center; padding: 0 0 5% 0">
    <a href="#form" class="buttons-ambil-promo"><span><i class=" fa fa-shopping-cart" aria-hidden="true"></i>
        </span>AMBIL 3 BOX</a>
</div> -->
<!-- <span><img src="src/assets/1box.webp" class="img" /></span> -->
    <!-- Button 
<div style="display: flex; justify-content: center; padding: 0 0 20% 0">
    <a href="#form" class="buttons-ambil-promo"><span><i class=" fa fa-shopping-cart" aria-hidden="true"></i>
        </span>AMBIL 1 BOX</a>
</div>
</div> -->

<!-- Promo Text
<div style="text-align: center; margin: 0 7%">
    <p style="text-transform: uppercase; background: #f8fc04; color: #000; font-weight: 900; font-size: 20px">AMBIL
        PROMO 2 BOX, KLIK TOMBOL DIBAWAH ⬇⬇</p>
</div> -->

<!-- Floating Button -->
<!-- Sesuaikan dengan gambar/gif yang akan dipakai -->
<!-- <center>
    <button class="floating-btn" onclick="redirect()">
        <img src="src/assets/whatsapp2.gif" alt="Floating Button" />
    </button>
</center> -->

<!-- Floating Pop Up Modal Button
<div style="display: flex; justify-content: center;">
    <a class="buttons-ambil-promo" onclick="redirectFORM()"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </span>AMBIL PROMO SEKARANG</a>
</div> -->

<!-- BUTTON FLOATING POPUP MODAL -->
<!-- Kode dibawah ini jika ingin menggunakan button manual 
<center>
    <button type="button" class="btn buttons-cs-popup floating-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span><i class="fa fa-whatsapp" aria-hidden="true"></i>
            PESAN SEKARANG MELALUI WHATSAPP
    </button>
</center> -->

<!-- MODAL POPUP -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #61ce70;">
                <h1 class="modal-title fs-5" id="exampleModalLabel">AMBIL PROMO SEKARANG</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div>
                    <!-- container list -->
                    <div>
                        <center>
                            <h2 style="color: red;">𝐒𝐄𝐋𝐀𝐌𝐀𝐓 𝐃𝐀𝐓𝐀𝐍𝐆 𝐃𝐈 𝐅𝐎𝐑𝐌 𝐏𝐄𝐌𝐄𝐒𝐀𝐍𝐀𝐍 𝐖𝐇𝐀𝐓𝐒𝐀𝐏𝐏 𝐍𝐔𝐓𝐑𝐈𝐅𝐋𝐀𝐊𝐄𝐒</h2>
                            <br>
                            <h2 style="color: green;">𝐏𝐓. 𝐈𝐍𝐎𝐕𝐀𝐓𝐎𝐑 𝐍𝐔𝐓𝐑𝐈𝐒𝐈 𝐒𝐄𝐇𝐀𝐓</h2>

                            <br>
                        </center>
                        <ul style=" list-style-type: none;">
                            <h5>𝐏𝐑𝐎𝐌𝐎 𝐒𝐏𝐄𝐒𝐈𝐀𝐋 𝐇𝐀𝐑𝐈 𝐈𝐍𝐈 :</h5>
                            <li><i class="fa fa-check-circle fa-5" style="color: green; font-size:24px;"></i><span style="font-size: 18px;"> 𝐆𝐑𝐀𝐓𝐈𝐒 𝐎𝐍𝐆𝐊𝐈𝐑</span></li>
                            <li><i class="fa fa-check-circle fa-5" style="color: green; font-size:24px;"></i><span style="font-size: 18px;"> 𝐏𝐎𝐓𝐎𝐍𝐆𝐀𝐍 𝐇𝐀𝐑𝐆𝐀 𝟏𝟗𝟎 𝐑𝐈𝐁𝐔</span></li>
                            <li><i class="fa fa-check-circle fa-5" style="color: green; font-size:24px;"></i><span style="font-size: 18px;"> 𝐆𝐑𝐀𝐓𝐈𝐒 𝐄-𝐁𝐎𝐎𝐊 𝐒𝐄𝐇𝐀𝐑𝐆𝐀 𝟐𝟎𝟎 𝐑𝐈𝐁𝐔</span></li>
                            <li><i class="fa fa-check-circle fa-5" style="color: green; font-size:24px;"></i><span style="font-size: 18px;"> 𝐁𝐄𝐁𝐀𝐒 𝐂𝐎𝐃 𝐒𝐄𝐋𝐔𝐑𝐔𝐇 𝐈𝐍𝐃𝐎𝐍𝐄𝐒𝐈𝐀</span></li>
                            <li><i class="fa fa-check-circle fa-5" style="color: green; font-size:24px;"></i><span style="font-size: 18px;"> 𝐁𝐄𝐁𝐀𝐒 𝐂𝐎𝐃 𝐒𝐄𝐋𝐔𝐑𝐔𝐇 𝐈𝐍𝐃𝐎𝐍𝐄𝐒𝐈𝐀</span></li>
                            <li><i class="fa fa-check-circle fa-5" style="color: green; font-size:24px;"></i><span style="font-size: 18px;"> 𝐃𝐈𝐏𝐑𝐎𝐒𝐄𝐒 & 𝐃𝐈𝐊𝐈𝐑𝐈𝐌 𝐋𝐀𝐍𝐆𝐒𝐔𝐍𝐆 𝐇𝐀𝐑𝐈 𝐈𝐍𝐈</span></li>
                        </ul>
                    </div>
                    <div style="
            margin: 7% 4%;
            padding: 5px 25px;
        ">

                        <div class="form-container-custom">
                            <center>
                                <strong>
                                    <h2>SILAHKAN ISI FORM PROMO</h2>
                                </strong>
                            </center>
                        </div>

                        <form id="form-order" class="loops-forms" action="<?php echo $_LOOP_EMAIL_POPUP; ?>" method="POST">
                            <div class="loops-group">
                                <label for="name" style="color: #000">Nama Lengkap<span class="red">*</span></label>
                                <input type="text" id="name" name="name" value="" placeholder="Tulis nama Anda" required />
                            </div>
                            <div class="loops-group">
                                <label for="phone" style="color: #000">NO WhatsApp <span class="red">*</span></label>
                                <input type="text" id="phone" name="phone" value="" placeholder="Sebutkan nomor HP aktif Anda: contoh 081234567890" pattern="[0]{1}[0-9]{8,12}" required />
                            </div>
                            <div class="loops-group">
                                <input type="submit" value="KIRIM WHATSAPP" class="loops-submit btn-add-to-cart" />
                            </div>
                            <input type="hidden" id="current" name="current" value="" />
                            <input type="hidden" name="redirect" value="" />
                            <input type="hidden" name="_loops_nonce" value="" />

                            <!--CAPI EVENT-->
                            <input type="hidden" name="event_id" id="event_id" value="eATC-<?php echo $_EVENT_ID; ?>" />

                            <div style="text-align: center">
                                <p style="
                background: #ffa432;
                color: #000;
                font-weight: 900;
                font-size: 18px;
                padding: 2px;
                ">
                                    PASTIKAN NOMOR WA KAMU BENAR, AGAR KAMI BISA MENGHUBUNGI KAMU
                                </p>
                            </div>
                        </form>
                    </div>
                    <script>
                        var form = document.getElementById("form-order");
                        form.addEventListener("submit", function(e) {
                            setCookie("vip", "<?php echo $_V_IP; ?>", 7);
                            fbq(
                                "track",
                                "AddToCart", {
                                    currency: "IDR"
                                }, {
                                    eventID: "eATC-<?php echo $_EVENT_ID; ?>"
                                }
                            );
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- =============================================== -->



<!-- CARAOUSEL
<center>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="src/assets/section-10-slide-1.webp" class="d-block w-100" alt="gambar-1" />
            </div>
            <div class="carousel-item">
                <img src="src/assets/section-10-slide-2.webp" class="d-block w-100" alt="gambar-2" />
            </div>
            <div class="carousel-item">
                <img src="src/assets/section-10-slide-1.webp" class="d-block w-100" alt="gambar-3" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</center> -->

<!-- Automatic Sildeshow -->
<!-- IMG SOURCE ganti nama gambar sesuai dengan nama file gambar yang ada -->

<!-- <center>
        <div class="slideshow-container">
            <div class="automaticSlides fade">
                <img src="src/assets/section-10-slide-1.webp" style="width:100%">
            </div>

            <div class="automaticSlides fade">
                <img src="src/assets/section-10-slide-2.webp" style="width:100%">
            </div>

            <div class="automaticSlides fade">
                <img src="src/assets/section-10-slide-1.webp" style="width:100%">
            </div>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </center> -->

<!-- GIF -->
<div id="ps" class="section" style=" padding: 22% 0 0 0">
    <span><img src="src/assets/12.gif" class="img" /></span>
</div>


<!-- Countdown -->
<p id="countdown" class="countdown"></p>


<!-- Gif -->
<!-- <div class="section">
        <span><img src="src/assets/ambil-promonya.gif" class="img" /></span>
    </div> -->

<!-- Gif Arrow-->
<!-- <div class="section">
        <span><img style="margin: 10% 1%;" src="src/assets/arrow.gif" class="img" /></span>
    </div> -->


<!-- Promo Text -->
<!-- <div style="text-align: center; margin: 0% 8% 0 8%; text-transform: uppercase; background: #f8fc04; font-size: 28px; font-weight: 900; padding: 2px;">
        <p style="color: #000;">gratis potongan ongkir</p>
        <p style="color: #FF1B1B;">setiap pesan minimal 2 box</p>
    </div> -->

<!-- Alert 
<div class="alert" id="alert">
    <span class="closebtnAlert" onclick="this.parentElement.style.display='none';">&times;</span>
    <center>
        <strong>Cara Ambil Promo</strong>
        <p>Isi FORM di bawah ini, KLIK tombol "BELI SEKARANG", dan Anda akan langsung terhubung dengan WA kami untuk mendapatkan PROMO (Potongan Harga Produk dan Ongkir)</p>
    </center>
</div> -->

<div class="section" style="position: relative;">
    <div style="border-radius: 10px; margin: 0% 5%; padding: 0px 0px;">
</div>

<!-- Form -->
<div class="section" id="form" style="position: relative;">
    <div style="border-radius: 10px; margin: 0% 4%; padding: 5px 25px; background: #123332; border: 4px solid white">
    <div class="container">
        <div class="section d-flex justify-content-center align-items-center">
            <img src="src/assets/heading/lpbaru/formwa.gif" alt="Centered Image" class="img-fluid" style="width: 125%; padding: 3% 0 3% 0">
        </div>
    </div>
    
    <!-- <span><img src="src/assets/heading/lpbaru/formwa.gif" class="img" /></span>     -->
    
    <!-- <div class="title-form">
            <p> Formulir<br>Pengambilan Promo</p>
        </div> -->

        <form id="form-order" class="loops-forms" action="<?php echo $_LOOP_EMAIL; ?>" method="POST">
            <div class="loops-group">
                <label for="name" style="color: white">Nama Lengkap<span class="red" style="color: red"> *</span></label>
                <input type="text" id="name" name="name" value="" placeholder="Tulis nama Anda" required>
            </div>
            <div class="loops-group">
                <label for="phone" style="color: white">Nomor WhatsApp (Aktif)<span class="red" style="color: red"> *</span></label>
                <input type="text" id="phone" name="phone" value="" placeholder="Sebutkan nomor HP aktif Anda: contoh 081234567890" pattern="[0]{1}[0-9]{8,12}" required>
            </div>
            <div class="loops-group">
                <input type="submit" value="AMBIL PROMO & PESAN SEKARANG" class="loops-submit btn-add-to-cart">
            </div>
            <!-- <div class="section d-flex justify-content-center align-items-center">
            <img src="src/assets/heading/lpbaru/15.gif" alt="Centered Image" class="img-fluid" style="width: 100%; padding: 0 0 3% 0" >
            </div> -->
            <input type="hidden" id="current" name="current" value="">
            <input type="hidden" name="redirect" value="">
            <input type="hidden" name="_loops_nonce" value="">

            <!--CAPI EVENT-->
            <input type="hidden" name="event_id" id="event_id" value="eATC-<?php echo $_EVENT_ID; ?>">

            <!-- <div style="text-align: center;">
                <p style="background: red; color: white; font-weight: 900; font-size: 18px; padding: 2px;">
                    PASTIKAN NOMOR WA KAMU BENAR, AGAR KAMI BISA MENGHUBUNGI KAMU</p>
            </div> -->
        </form>
        <script>
            var form = document.getElementById('form-order');
            form.addEventListener('submit', function(e) {
                setCookie('vip', '<?php echo $_V_IP; ?>', 7);
                // AddToCart bisa diganti Leads / Initiate Checkout tergantung event yang akan digunakan
                fbq('track', 'AddToCart', {
                    currency: 'IDR'
                }, {
                    eventID: "eATC-<?php echo $_EVENT_ID; ?>"
                });
            });
        </script>
    </div>
</div>

<!-- ==================================== -->

<!-- Promo Text & Counter -->
<div style="text-align: center">
    <div id="baseCounter" style="font: 800 60px system-ui; color: #ff1b1b">
        100
    </div>
    <p style="
        text-transform: uppercase;
        color: #000;
        font-weight: 600;
        font-size: 22px;
        text-shadow: 1px 0px 2px #000;
    ">
        tersisa 24 box hari ini
    </p>
</div>

<!-- Gif Kepastian WA -->
<div class="container">
        <div class="section d-flex justify-content-center align-items-center">
            <img src="src/assets/13.gif" alt="Centered Image" class="img-fluid" style=" width: 90%; padding: 3% 0 20% 0;">
        </div>
    </div>

    <div class="container">
        <div class="section d-flex justify-content-center align-items-center">
            <img src="src/assets/heading/17.webp" alt="Centered Image" class="img-fluid" style=" width: 60% ">
        </div>
    </div>

<!-- Note -->
<div style="text-align: center; margin: 0 7%">
    <p style="text-transform: uppercase; color: black; font-weight: 700; font-size: 15px">
    karena banyaknya pesanan <br> dan stok potongan harga & potongan ongkir terbatas, kami mendahulukan pesanan yang masuk melalui form.</p>
</div>

<!-- Button -->
<div style="display: flex; justify-content: center;">
    <a href="#ps" class="buttons-ambil-dengan-promo"><span><i class="fa fa-whatsapp" aria-hidden="true"></i>
        </span>PESAN DENGAN PROMO</a>
</div>

<!-- Button WA -->
<div style="display: flex; justify-content: center;">
    <a href="<?php echo $_LOOP_WA; ?>" class="btn-wa buttons-cs"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </span>PESAN SEKARANG</a>
</div>

<!-- Button Arah Isi Form -->
<!-- <div style="display: flex; justify-content: center;">
        <a href="#section-promo" class="buttons-cek-promo"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </span>CEK HARGA & PROMO</a>
    </div> -->

<!-- <center>
    <p class="fw-bold">*karena banyaknya pesanan dan stok potongan harga & potongan ongkir terbatas, kami mendahulukan pesanan yang masuk melalui form.
    </p>
</center> -->

<!-- Gambar -->
<div class="section">
    <span><img src="src/assets/14.webp" class="img" /></span>
</div>

<!-- Gambar -->
<div class="section">
    <span><img src="src/assets/15.webp" class="img" /></span>
</div>

<!-- Button -->
<div style="display: flex; justify-content: center;">
    <a href="#harga" class="buttons-ambil-promo"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </span>CEK HARGA PROMO</a>
</div>

<!-- Gambar -->
<div class="section">
    <span><img src="src/assets/16.webp" class="img" /></span>
</div>

<!-- KUMPULAN PEMANGGILAN SCRIPT -->
<script src="src/scripts/jquery-3.6.0.min.js" language="javascript"></script>
<script src="src/scripts/jquery.lazyload.min.js" language="javascript"></script>
<!-- <script src="src/scripts/toasts-notification.js" language="javascript"></script> -->
<script src="src/scripts/slideshow.js" language="javascript"></script>
<script src="src/scripts/carousel.js" language="javascript"></script>
<script src="src/scripts/counter-titik.js" language="javascript"></script>
<script src="src/scripts/counter.js" language="javascript"></script>
<script src="src/scripts/countdown.js" language="javascript"></script>

<!-- masukan bootstrap body dibawah ini -->
<!-- Script CDN Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function redirectFORM() {
        window.location = "<?php echo $_LOOP_EMAIL_BUTTON_POPUP; ?>";
        fbq('track', 'InitiateCheckout', {eventID: "eATC-<?php echo $_EVENT_ID; ?>"})
    }
</script>

<!-- SCRIPT REDIRECT LANGSUNG FORM -->
<script>
    function redirect() {
        window.location = "<?php echo $_LOOP_EMAIL_BUTTON_POPUP; ?>";
    }
</script>


<!-- Script Kode CAPI -->
<script>
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    $(document).ready(function(e) {
        // $("img.lazy").lazyload();

        if (getCookie('vip')) {
            //$('#form-order').hide();
            $('#thx_div').show();
        }

        <?php if (isset($_GET['reset']) && $_GET['reset'] == 1) { ?>
            document.cookie = "vip=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        <?php } ?>

        fbq('track', 'ViewContent', {}, {
            eventID: "eVC-<?php echo $_EVENT_ID; ?>"
        });
    });
</script>
<!-- Paste Script Nakula Dibawah Sini -->
<script>var gbsid = "a9e06c76a8cb3171624c0c8032fd1ee2"</script>
<script src="https://xt.gbnkla.com/jx/v1/cakra.js"></script>
</body>

</html>