<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="https://lh3.googleusercontent.com/blogger_img_proxy/AJ0KDdUcEsnYxzxqkV9vUg9MInKOx8r27G_smNjfjIjVTC5Vjhr_WHDhCXm6TwCx-XiRs1PAgOd9zKyMyCHJgo2s2eeQ8qYR5cmEHsNZuMJfcb1GvdRoHwIvtwekmB2CqVOCZrnsNCmYpPxsfU39jzZf5Ba5zdOb7ZXtd2LBdEsWTgmK5Bw=s0-d" />
    <link rel="stylesheet" href="css/style.css">
    <title>resto sodap</title>
</head>

<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="https://lh3.googleusercontent.com/blogger_img_proxy/AJ0KDdUcEsnYxzxqkV9vUg9MInKOx8r27G_smNjfjIjVTC5Vjhr_WHDhCXm6TwCx-XiRs1PAgOd9zKyMyCHJgo2s2eeQ8qYR5cmEHsNZuMJfcb1GvdRoHwIvtwekmB2CqVOCZrnsNCmYpPxsfU39jzZf5Ba5zdOb7ZXtd2LBdEsWTgmK5Bw=s0-d" alt="" width="45" height="45" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#jumbotron"><i class="fa-solid fa-house"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product"><i class="fa-solid fa-utensils"></i>
                            menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fa-solid fa-address-book"></i> Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary tombol" href="#"><i class="fa-solid fa-user"></i> Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- tombol to top -->
    <div class="to-top" id="tombol-atas" data-aos="fade-left">
        <a><i class="fa-solid fa-arrow-up"></i></a>
    </div>

    <section id="cari">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </section>

    {{-- display in dekstop only  --}}
    <section id="jumbotron">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <h4><span>Haiii,</span> Selamat Datang...</h4>
                        <h1>di resto sodap <br> solaras yo...</h1>

                    </div>
                    <div class="col-lg">
                        <img src="img/Hand-drawn-Indonesian-food-on-transparent-background-PNG-removebg-preview.png">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="intro">
        {{-- card --}}
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="card kartu">
                        <div class="gambar-card"><i class="fa-solid fa-cart-shopping"></i></div>
                        <div class="card-body">
                            <h5 class="j-title">Jadwal Pemesanan</h5>
                            <p class="l-text"></p>
                            <hr>
                            <a href="/cart" class="t-card">Lihat selengkapnya!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card kartu">
                        <div class="gambar-card"><i class="fa-solid fa-bowl-food"></i></div>
                        <div class="card-body">
                            <h5 class="j-title">Paket menu</h5>
                            <p class="l-text"></p>
                            <hr>
                            <a href="/product" class="t-card">Lihat selengkapnya!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card kartu">
                        <div class="gambar-card"><i class="fa-solid fa-credit-card"></i></div>
                        <div class="card-body">
                            <h5 class="j-title">Proses Pembayaran</h5>
                            <p class="l-text"></p>
                            <hr>
                            <a href="#" class="t-card">Lihat selengkapnya!</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- slide bar  --}}
        <div class="container">
            <div class="intro-display">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="http://asiantoprecipes.weebly.com/uploads/5/3/4/0/5340076/12.jpg?718" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://smartnewstapanuli.com/wp-content/uploads/2020/06/nasi-goreng.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://1.bp.blogspot.com/-Szmm7LBPDEE/VfMA7tKXLiI/AAAAAAAAAT0/p7XN8n-iShQ/s1600/teh%2Bes.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>



    <section id="list-product-sec">
        <div class="container">
            <div class="list-product">
                <div class="row">
                    <div class="col-lg">
                        <h1>menu <span>terlaris</span></h1>
                    </div>
                    <div class="col-lg">
                        {{-- <button class="btn btn-primary tombol"><i class="fa-solid fa-list"></i> All Category</button> --}}
                        <div class="dropdown">
                            <a class="btn btn-primary tombol dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-list"></i> All Category
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row list-product-card">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://1.bp.blogspot.com/-vDdbPxvc3vw/XpvsM7u-AgI/AAAAAAAAGo0/ZlM0-yQ6FykT5iPYCj6VH7-HLkCRsM5CQCLcBGAsYHQ/s1600/mie-ayam-dua-putra-jogja.jpg" class="card-img-top" alt="foto 1">
                        <div class="card-body">
                            <h5 class="card-title">mie ayam </h5>
                            <p class="card-text">RP 12.000</p>
                            <a href="#" class="btn btn-primary">pesan sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/11/Resep-Nasgor-Gila.jpg?fit=1300%2C1258&ssl=1" class="card-img-top" alt="foto 1">
                        <div class="card-body">
                            <h5 class="card-title">nasi goreng</h5>
                            <p class="card-text">RP 14.000</p>
                            <a href="#" class="btn btn-primary">pesan sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://i2.wp.com/masfikr.com/fikrithoni/wp-content/uploads/2018/11/Cara-Membuat-Es-Teler-Nanas-travelingyuk.com-.jpg?resize=680%2C575" class="card-img-top" alt="foto 1">
                        <div class="card-body">
                            <h5 class="card-title">es teler</h5>
                            <p class="card-text">RP 6.000</p>
                            <a href="#" class="btn btn-primary">pesan sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="keunggulan-kami">
        <div class="container">
            <hr>
            <h1 class="j-keunggulan">mengapa harus sodap resto</h1>

            <div class="row">
                <div class="col-6">
                    <div class="card keunggulan-kartu">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="gambar-keunggulan"> <i class="fa-solid fa-clock"></i></div>
                            </div>
                            <div class="col-lg">
                                <div class="card-body">
                                    <h5 class="card-title">pelayanan cepat</h5>
                                    <p class="card-text">pesanan segera di antarkan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card keunggulan-kartu">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="gambar-keunggulan"> <i class="fa-solid fa-thumbs-up"></i></div>
                            </div>
                            <div class="col-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Terjangkau</h5>
                                    <p class="card-text">harga menu sesuai isi dompet dan murah meriah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card keunggulan-kartu">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="gambar-keunggulan"> <i class="fa-solid fa-burger"></i></div>
                            </div>
                            <div class="col-lg">
                                <div class="card-body">
                                    <h5 class="card-title">Paket menu</h5>
                                    <p class="card-text">Tersedia pilihan paket menu dengan komplit dan terlaris.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card keunggulan-kartu">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="gambar-keunggulan"> <i class="fa-solid fa-face-smile-beam"></i></div>
                            </div>
                            <div class="col-lg">
                                <div class="card-body">
                                    <h5 class="card-title">sedappp</h5>
                                    <p class="card-text">setiap menu yang menggugah selera</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main contact us -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3 class="j-contact">Contact</h3>
                    <h1 class="j-hub">Hubungi Saya</h1>
                    <p class="label-contact">
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                        <strong>Thank You!</strong> Pesan anda sudah kami terima.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form name="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                        </div>

                        <div class="col-lg">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-success btn-rwt">
                                    Kirim
                                </button>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row bawah">
                <div class="col-lg info">
                    <h3>INFOR<span>MASI</span></h3>
                    <br />
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/product">Product</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg priv">
                    <h3>PRIVACY <span>POLICY</span></h3>
                    <br />
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Term Of Use</a></li>
                    </ul>

                </div>
            </div>
            <hr class="garis2" />
            <div class="container">
                <p class="footer-bottom">

                </p>
            </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>