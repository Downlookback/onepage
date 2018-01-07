<html><head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Diajukan untuk memenuhi tugas Praktikum Desain Web.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, one page">
    <meta name="author" content="JindongInside">

    <link rel="shortcut icon" type="assets/image/x-icon" href="uty.png">
    <title>Beautyku</title>

    <link href="assets/css/metro.css" rel="stylesheet">
    <link href="assets/css/metro-icons.css" rel="stylesheet">
    <link href="assets/css/metro-responsive.css" rel="stylesheet">
    <link href="assets/css/metro-schemes.css" rel="stylesheet">

    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/metro.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/google/code-prettify/master/loader/prettify.css">
<body>
    <div><header class="app-bar fixed-top navy" data-role="appbar">
    <div class="container">
        <a href="index.php" class="app-bar-element branding"><img src="logo.jpg" style="height: 28px; display: inline-block; margin-right: 10px;"> Beranda</a>

        <ul class="app-bar-menu small-dropdown">
            <li data-flexorderorigin="0" data-flexorder="2" class="">
                <a href="#profil"><span class="mif-profile icon"></span> Profil</a>
            </li>
            <li data-flexorderorigin="1" data-flexorder="2">
                <a href="#destinasi"><span class="mif-books icon"></span> Produk</a>
            </li>

            <li data-flexorderorigin="2" data-flexorder="3">
                <a href="#pemesanan"><span class="mif-cart icon"></span> Informasi</a>
            </li>

            <li data-flexorderorigin="3" data-flexorder="4">
                <a href="#kontak"><span class="mif-contacts-dialer icon"></span> Kontak</a>
            </li>
        </ul>

        <span class="app-bar-pull"></span>

    <div class="app-bar-pullbutton automatic" style="display: none;"></div><div class="clearfix" style="width: 0;"></div><nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;"><ul class="app-bar-pullmenubar hidden app-bar-menu"></ul></nav></div>
</header>
</div><div class="page-content">
        <div class="bg-lightBlue fg-white align-center">
            <div class="container">
                <div class="no-overflow" style="padding-top: 40px">

                    <br>
                    <br>
                    <br>
                    <h1 style="font-size: 4.5rem; line-height: 1" class="text-shadow metro-title text-light">Beauty Product of Indonesia</h1>
                    <div class="padding30 sub-leader text-light">Semua Product 100% Asli dan Terpercaya Cantik</div>
                    <div class="margin60">
                        <div class="clear-float">
                            
                        </div>

                        <!-- arep disi opo -->
                    </div>

                    <div class="grid no-margin-bottom" style="margin-top: 100px" id="g1">
                        <div class="row cells3">
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-white fg-black block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">ASLI</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-white fg-black block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">TERPECAYA</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-white fg-black block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">AMPUH</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $(function(){
                            setTimeout(function(){
                                $("#g1 .cell > div:eq(0)").animate({
                                    'margin-top': 0
                                }, 500, 'easeOutBounce');
                                $("#g1 .cell > div:eq(1)").animate({
                                    'margin-top': 0
                                }, 1000, 'easeOutBounce');
                                $("#g1 .cell > div:eq(2)").animate({
                                    'margin-top': 0
                                }, 1500, 'easeOutBounce');
                            }, 500);
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class="fg-dark">
            <div id="profil" class="container">
                <div class="padding80" style="padding-top: 40px">
                    <div class="">
                        <div class="grid">
                            <div class="row">            		
                                <div class="cell padding20 clear-float">
					               <div>
	                                    <img id="book_logo" src="assets/image/destinasi/pexels-photo-236393.jpeg" class="place-left" style="height: 190px; margin-right: 20px;">
	                                    <h2 class="text-light">Beauty Product of Indonesia	                                    </h2>
	                                    <div class="fg-dark">
	                                        <p>Beauty Product of Indonesia adalah produsen barang kecantikan. dengan berbagai macam tipe-tipe, mulai dari liftik,bedak, lotion,dll. Beauty Product of Indonesia berlokasi di jakarta dekat monas. produk-produk ini mulai pertama kali dipasarkan pada tahun 1993 di kota-kota kecil di pulai jawa, dan pada 10 tahun mulai memiliki nama dan penjualan meningkat hingga produk-produk terjual 3 kali lipat dari bulan sebelumnya dan pada tahun 2000 mulai memasarkan ke luar negeri hingga saat ini menjadi produk nomor 1 di indonesia.</p>
	                                    </div>
					               </div>
	                               </a>
				                </div>
                             
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <hr class="thin" ></div>
    <div class="main-content clear-float" id="destinasi">
        <h2 class="text-light"><u>Produk- Produk Utama Kami :</u></h2>
        <div class="tile-area no-padding">
            <div class="tile-group no-margin no-padding" style="width: 100%">
                <div class="tile-group no-margin no-padding" style="width: 100%">
                    <!-- --><div class="tile-large ol-transparent" data-role="tile">
                        <div class="tile-content">
                            <div class="carousel" data-role="carousel" data-height="100%" data-width="100%" data-controls="false">
                                <div class="slide">
                                    <img src="assets/image/destinasi/cosmetics-makeup-make-up-brush-60571.jpeg" data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-234220.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-264870.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-301367.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-355197.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tile-large ol-transparent" data-role="tile">
                        <div class="tile-content">
                            <div class="carousel" data-role="carousel" data-height="100%" data-width="100%" data-controls="false">
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-355206.jpeg" data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-414729.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-458593.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-751160.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/destinasi/pexels-photo-324654.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile bg-lightBlue fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-earth mif-ani-ripple"></span>
                        </div>
                    </div>
                    <div class="tile bg-blue fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-paper-plane mif-ani-float"></span>
                        </div>
                    </div>
                    <div class="tile bg-teal fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-heart mif-ani-heartbeat"></span>
                        </div>
                    </div>
                    <div class="tile bg-blue fg-white" data-role="tile">
                        <div class="tile-content iconic">
                            <span class="icon mif-thumbs-up mif-ani-bounce"></span>
                        </div>
                    </div>

                    <div class="tile-big tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel" style="height: 100%">
                                <div class="heading bg-blue fg-white"><span class="title text-light">Produk Paling Istimewa</span></div>
                                <div class="content fg-dark clear-float" style="height: 100%">
                                    <img src="assets/image/pexels-photo-634524.jpeg" class="place-left margin10" style="height: 120px">
                                    <h2 class="text-light">Olay</h2>
                                    <p>Olay Regenerist adalah rangkaian perawatan kulit terdepan dari Olay dengan kandungan amino-peptide. Tampil dalam Regenerist Micro-Sculpting Cream, krim anti aging ini mampu membuat kulit tampak lebih kencang, menyamarkan garis-garis halus, kerutan pada kulit, dan menjaga kekenyalan serta elastisitas kulit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel">
                                <div class="heading bg-blue fg-white"><span class="title text-light">Memilih Produk</span></div>
                                <div class="content fg-white clear-float">
                                    <img src="assets/image/pexels-photo-339701.jpeg" class="">
                                    <strong>Pilih Produk</strong> Produk yang berkualitas adalah produk yang menggunakan bahan-bahan terbaik dan original 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End first group -->

                <div class="tile-group no-margin no-padding" style="width: 100%">
                    <div class="tile-wide bg-cyan" data-role="tile">
                        <div class="tile-content image-set">
                            <img src="assets/image/brush-makeup-make-up-brushes.jpg">
                            <img src="assets/image/fashion-girl-makeup-paint.jpg">
                            <img src="assets/image/pexels-photo-208052.jpeg">
                            <img src="assets/image/pexels-photo-251274.jpeg">
                            <img src="assets/image/pexels-photo-396129.jpeg">
                        </div>
                    </div>
                    <div class="tile bg-green" data-role="tile" data-effect="slideUpDown">
                        <div class="tile-content">
                            <div class="live-slide"><img src="assets/image/brush-makeup-make-up-brushes.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="assets/image/fashion-girl-makeup-paint.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="assets/image/pexels-photo-208052.jpeg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="assets/image/pexels-photo-251274.jpeg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="assets/image/pexels-photo-396129.jpeg" data-role="fitImage" data-format="fill"></div>
                        </div>
                    </div>
                    <div class="tile bg-green" data-role="tile" data-effect="slideLeftRight">
                        <div class="tile-content">
                            <div class="live-slide"><img src="assets/image/brush-makeup-make-up-brushes.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="assets/image/fashion-girl-makeup-paint.jpg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="assets/image/pexels-photo-208052.jpeg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="assets/image/pexels-photo-208052.jpeg" data-role="fitImage" data-format="fill"></div>
                            <div class="live-slide"><img src="assets/image/pexels-photo-396129.jpeg" data-role="fitImage" data-format="fill"></div>
                        </div>
                    </div>
                    <div class="tile-wide bg-red" data-role="tile">
                        <div class="tile-content image-set">
                            <img src="assets/image/brush-makeup-make-up-brushes.jpg">
                            <img src="assets/image/fashion-girl-makeup-paint.jpg">
                            <img src="assets/image/pexels-photo-208052.jpeg">
                            <img src="assets/image/pexels-photo-208052.jpeg">
                            <img src="assets/image/pexels-photo-396129.jpeg">
                        </div>
                    </div>
                </div>
            </div></div></div></div>

    <div>         
    <footer style="background-color: #6000ff">
    <div class="bg-steel no-tablet-portrait no-phone">
        <div class="container padding20 fg-white">
            <div class="carousel bg-transparent" data-role="carousel" data-controls="false" data-markers="false" data-effect="fade" data-height="600" style="width: 100%; height: 600px;">
                <div class="slide fg-white">
                    <!-- pesen -->
                    <div id="pemesanan" class="container padding40 fg-white">
                        <h3 class="text-light">Beauty Of Indonesia<strong></strong></h3>  
                        <form>
                        <div class="grid">
                            <div class="row cells2">
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="text" style="padding-right: 5px;">
                                        <span class="label">Nama</span>
                                        <span class="informer">Maukkan nama anda</span>
                                        <span class="placeholder" style="display: block;">Nama lengkap</span>
                                        <span class="icon mif-user"></span>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="email" style="padding-right: 5px;">
                                        <span class="label">Email</span>
                                        <span class="informer">Masukkan alamat email anda</span>
                                        <span class="placeholder" style="display: block;">Alamat email</span>
                                        <span class="icon mif-mail"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row cells2">
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="number" style="padding-right: 5px;">
                                        <span class="label">Nomor HP</span>
                                        <span class="informer">Masukkan nomor HP anda</span>
                                        <span class="placeholder" style="display: block;">Nomor HP</span>
                                        <span class="icon mif-contacts-dialer"></span>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="input-control modern text iconic" data-role="input">
                                        <input type="text" style="padding-right: 5px;">
                                        <span class="label">Kode Promo</span>
                                        <span class="informer">Masukkan kode promo</span>
                                        <span class="placeholder" style="display: block;">Kode promo</span>
                                        <span class="icon mif-discout"></span>
                                    </div>
                                </div>
                            </div>
                            <div clear-float>
                                <label class="input-control checkbox small-check">
                                <input type="checkbox"">
                                <span class="check"></span>
                                <span class="caption">Saya setuju dengan syarat dan aturan yang berlaku!</span>
                            </label>
                            </div>
                            <button action="" class="button big-button block-shadow success loading-pulse lighten" align="align-center"> Pesan</button>
                        </div>
                    </form>
                    </div>
                    <!-- smpe kene wae -->
                </div>
            </div>
        </div>
    </div>

    <div id="kontak" class="container">
        <!-- kontakkkk-->
        <div class="cell colspan3 padding20 no-padding-top no-padding-bottom">
            <h2>Kontak</h2>
            <p>&nbsp;</p>
            <div>
                <div class="icon mif-home mif-lg"><h3>&nbsp;</h3></div>
                <div class="icon mif-contacts-dialer mif-lg">
                  <h3>jl. Soekarno no.46 DKI Jakarta-082255765</h3></span>
                <div class="icon mif-mail mif-lg"><a href="mailto:nidarahayu77@gmail.com"><h3>&nbsp;</h3></a></div>
                <div class="icon mif-facebook mif-lg"><a href="https://#"><h3>&nbsp;</h3></a></div>
                <div class="icon mif-twitter mif-lg"><a href="https://#"><h3>&nbsp;</h3></a></div>
                <div class="icon mif-earth mif-lg"><a href="https://#"><h3>&nbsp;</h3></a></div>
            </div>
        </div>

        <div class="align-center padding20 text-small">
          Copyright 2017</div>
    </div>
</footer>
</div>

</body></html>