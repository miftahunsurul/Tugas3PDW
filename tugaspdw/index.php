<html><head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Diajukan untuk memenuhi tugas Praktikum Desain Web.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, one page">
    <meta name="author" content="Mside">

    <link rel="shortcut icon" type="assets/image/x-icon" href="5b42c1bf7605338e2ea900dafda21f08.png">
    <title>Shunsine</title>

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
        <a href="index.php" class="app-bar-element branding"><img src="5b42c1bf7605338e2ea900dafda21f08.png" style="height: 28px; display: inline-block; margin-right: 10px;"> Beranda</a>

        <ul class="app-bar-menu small-dropdown">
            <li data-flexorderorigin="0" data-flexorder="2" class="">
                <a href="#produk"><span class="mif-profile icon"></span> Produk</a>
            </li>
            <li data-flexorderorigin="1" data-flexorder="2">
                <a href="#profil"><span class="mif-books icon"></span> Profil</a>
            </li>

            <li data-flexorderorigin="2" data-flexorder="3">
                <a href="#pemesanan"><span class="mif-cart icon"></span> Pemesanan</a>
            </li>

            <li data-flexorderorigin="3" data-flexorder="4">
                <a href="#kontak"><span class="mif-contacts-dialer icon"></span> Kontak</a>
            </li>
        </ul>

        <span class="app-bar-pull"></span>

    <div class="app-bar-pullbutton automatic" style="display: none;"></div><div class="clearfix" style="width: 0;"></div><nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;"><ul class="app-bar-pullmenubar hidden app-bar-menu"></ul></nav></div>
</header>
</div><div class="page-content">
        <div class="bg-lightPink fg-white align-center">
            <div class="container">
                <div class="no-overflow" style="padding-top: 180px">

                    <br>
                    <br>
                    <br>
                    <h1 style="font-size: 4.5rem; line-height: 1" class="text-shadow metro-title text-light">Sunshine Cosmetics</h1>
                    <div class="padding30 sub-leader text-light">
                        Buat Hidup Mu <b>BERSINAR!
                    </div>
                        <!-- arep disi opo -->
                    </div>

                    <div class="grid no-margin-bottom" style="margin-top: 190px" id="g1">
                        <div class="row cells3">
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-yellow fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">Cantik</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-green fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">Sehat</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-red fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 0px;">
                                    <h2 class="text-light">Memikat</h2>
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


    <div class="main-content clear-float" id="produk">
        <h2 class="text-light"><u>Produk</u></h2>
        <div class="tile-area no-padding">
            <div class="tile-group no-margin no-padding" style="width: 100%">
                <div class="tile-group no-margin no-padding" style="width: 100%">
                    

                    <div class="tile-large ol-transparent" data-role="tile">
                        <div class="tile-content">
                            <div class="carousel" data-role="carousel" data-height="100%" data-width="100%" data-controls="false">
                                <div class="slide">
                                    <img src="assets/image/produk/love-heart-makeup-beauty.jpg" data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/produk/makeup-beauty-lipstick-make-up.jpg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/produk/pexels-photo-301367.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/produk/red-coffee-cup-desk-6358.jpg"  data-role="fitImage" data-format="fill">
                                </div>
                                <div class="slide">
                                    <img src="assets/image/produk/pexels-photo-211342.jpeg"  data-role="fitImage" data-format="fill">
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="tile-big tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel" style="height: 100%">
                                <div class="heading bg-BlueWhite fg-white"><span class="title text-light">Produk Bedak Unggulan</span></div>
                                <div class="content fg-dark clear-float" style="height: 100%">
                                    <img src="assets/image/produk/pexels-photo-457704.jpeg" class="place-left margin10" style="height: 180px">
                                    <h2 class="text-light">Pouns</h2>
                                    <li>Polpularitas: 80% </li>
                                    <li>Kualitas    : 100%</li>
                                    <li>Recomended Artis</li>
                                    <li>Bersertifikat</li>
                                    <li>Halal</li>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tile-big tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel" style="height: 100%">
                                <div class="heading bg-darkRed fg-white"><span class="title text-light">Produk Lipstik Unggulan</span></div>
                                <div class="content fg-dark clear-float" style="height: 100%">
                                    <img src="assets/image/produk/pexels-photo-457701.jpeg" class="place-left margin10" style="height: 180px">
                                    <h2 class="text-light">Miracle</h2>
                                    <li>Polpularitas: 86% </li>
                                    <li>Kualitas    : 100%</li>
                                    <li>Recomended Artis</li>
                                    <li>Bersertifikat</li>
                                    <li>Halal</li>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tile tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel">
                                <div class="heading bg-pink fg-white"><span class="title text-light">Tips Wisata</span></div>
                                <div class="content bg-lightPink fg-white clear-float">
                                    <img src="assets/image/produk/pexels-photo-205923.jpeg" class="">
                                    <strong>Teliti</strong> Produk sebelum membeli, karene terkadang produk yang ditawarkan tidak sesuai dengan apa yang diharapkan karena itu penting.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tile-big tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel" style="height: 100%">
                                <div class="heading bg-darkpink fg-white"><span class="title text-light">Produk Alis Unggulan</span></div>
                                <div class="content fg-dark clear-float" style="height: 100%">
                                    <img src="assets/image/produk/fashion-girl-makeup-paint.jpg" class="place-left margin10" style="height: 180px">
                                    <h2 class="text-light">Alice</h2>
                                    <li>Polpularitas: 86% </li>
                                    <li>Kualitas    : 93%</li>
                                    <li>Recomended punya</li>
                                    <li>Bersertifikat</li>
                                    <li>Halal</li>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="tile-big tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel" style="height: 100%">
                                <div class="heading bg-yellow fg-white"><span class="title text-light">Produk Eyeshadow Unggulan</span></div>
                                <div class="content fg-dark clear-float" style="height: 100%">
                                    <img src="assets/image/produk/makeup-make-up-artist-make-up.jpg" class="place-left margin10" style="height: 180px">
                                    <h2 class="text-light">Alice</h2>
                                    <li>Polpularitas: 83% </li>
                                    <li>Kualitas    : 80%</li>
                                    <li>Recomended punya</li>
                                    <li>Bersertifikat</li>
                                    <li>Halal</li>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="tile-big tile-wide-y bg-white" data-role="tile">
                        <div class="tile-content">
                            <div class="panel" style="height: 100%">
                                <div class="heading bg-green fg-white"><span class="title text-light">Produk Pelembab Kulit Unggulan</span></div>
                                <div class="content fg-dark clear-float" style="height: 100%">
                                    <img src="assets/image/produk/pexels-photo-458766.jpeg" class="place-left margin10" style="height: 180px">
                                    <h2 class="text-light">Alice</h2>
                                    <li>Polpularitas: 88% </li>
                                    <li>Kualitas    : 99%</li>
                                    <li>Recomended punya</li>
                                    <li>Bersertifikat</li>
                                    <li>Halal</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End first group -->

                </div>
            </div></div></div></div>
        <hr class="thin" ></div>
        <div class="fg-dark">
            <h2 class="text-light"><u>Tentang</u></h2>
            <div id="profil" class="container">
                <div class="padding80" style="padding-top: 40px">
                    <div class="">
                        <div class="grid">
                            <div class="row">            		
                                <div class="cell padding20 clear-float">
					               <div>
	                                    <img id="book_logo" src="assets/image/pexels-photo-234220.jpeg" class="place-left" style="height: 190px; margin-right: 20px;">
	                                    <h2 class="text-light">Sunshine Cosmetics</h2>
	                                    <h3 class="fg-red">Tentang Sunshine Cosmetics</h3>
	                                    <div class="fg-dark">
	                                        Sunshine Cosmetics merupakan toko yang menyediakan berbagai macam kebutuhan kecantikan wanita. Banyak produk yang ditawarkan diantaranya lipstik, bedak, bulumata, eyeshadow, mascara, pensil alis, pelembab kulit, dan masih banyak lagi. Semua produk yang ditawarkan merupakan produk-produk berkualitas yang tidak perlu diragukan lagi hasilnya. Selain itu harga yang ditawarkan oleh toko Sunshine Cosmetics sangat terjangkau. Tunggu apalagi buruan diorder ya sist...
	                                    </div>
					               </div>
	                               </a>
				                </div>
                                <div class="cell padding20 clear-float">
                                   <div>
                                        <img id="book_logo" src="assets/image/pexels-photo-208052.jpeg" class="place-right" style="height: 190px; margin-right: 20px;">
                                        <h1 class="">Kenapa Harus Sunshine Cosmetics?</h1>
                                        <ol class="numeric-list square-marker">
                                            <li>Barang berkualitas</li>
                                            <li>Murah tapi BUKAN MURAHAN</li>
                                            <li>Recomended Artis</li><li>Mempercantik para wanita yang memakainya</li></li>
                                            <li>Siap menjadi curhatan para WANITA seputar Cosmetics</li>
                                        </ol>
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
    

    <div>         
    <footer style="background-color: #EFEAE3">
    <div class="bg-steel no-tablet-portrait no-phone">
        <h2 class="text-light"><u>Pemesanan Produk Kosmetik</u></h2>
        <div class="container padding20 fg-white">
            <div class="carousel bg-transparent" data-role="carousel" data-controls="false" data-markers="false" data-effect="fade" data-height="600" style="width: 100%; height: 600px;">
                <div class="slide fg-white">
                    <div id="pemesanan" class="container padding40 fg-white">
                        <h3 class="text-light">Jadilah Member  <strong>Sunshine Cosmetics</strong> Dan Dapatkan Potongan Harga Besar-Besaran!!</h3>  
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
                </div>
            </div>
        </div>
    </div>

    <div id="kontak" class="container">
        <div class="cell colspan3 padding20 no-padding-top no-padding-bottom">
            <h2>Kontak</h2>
            <p>
                Informasi lebih lanjut, hubungi:
            </p>
            <div>
                <div class="icon mif-home mif-lg"><h3>Jl. Wates, Kulon Progo, Yogyakarta</h3></div>
                <div class="icon mif-contacts-dialer mif-lg"><h3>0222846467</h3></span>
                <div class="icon mif-mail mif-lg"><a href="mailto:sunshinecosmetics@gmail.com"><h3>sunshinecosmetics@gmail.com</h3></a></div>
                <div class="icon mif-facebook mif-lg"><a href="https://#"><h3>Shunsine Cosmetics</h3></a></div>
                <div class="icon mif-twitter mif-lg"><a href="https://#"><h3>@sunshinecosmetics</h3></a></div>
                <div class="icon mif-earth mif-lg"><a href="https://#"><h3>www.sunshinecosmetics.com</h3></a></div>
            </div>
        </div>

        <div class="align-center padding20 text-small">
            Copyright 2018 <a href="index.php">Sunshine Cosmetics</a>
        </div>
    </div>
</footer>
</div>

</body></html>