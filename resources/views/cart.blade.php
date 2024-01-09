<!doctype html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="https://lh3.googleusercontent.com/blogger_img_proxy/AJ0KDdUcEsnYxzxqkV9vUg9MInKOx8r27G_smNjfjIjVTC5Vjhr_WHDhCXm6TwCx-XiRs1PAgOd9zKyMyCHJgo2s2eeQ8qYR5cmEHsNZuMJfcb1GvdRoHwIvtwekmB2CqVOCZrnsNCmYpPxsfU39jzZf5Ba5zdOb7ZXtd2LBdEsWTgmK5Bw=s0-d" />
    <link rel="stylesheet" href="css/style.css">
    <title>resto sodap</title>
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="https://lh3.googleusercontent.com/blogger_img_proxy/AJ0KDdUcEsnYxzxqkV9vUg9MInKOx8r27G_smNjfjIjVTC5Vjhr_WHDhCXm6TwCx-XiRs1PAgOd9zKyMyCHJgo2s2eeQ8qYR5cmEHsNZuMJfcb1GvdRoHwIvtwekmB2CqVOCZrnsNCmYpPxsfU39jzZf5Ba5zdOb7ZXtd2LBdEsWTgmK5Bw=s0-d" alt="" width="45" height="45" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fa-solid fa-house"></i> Beranda</a>
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

    <section id="intro">
        {{-- card --}}
        <div class="container">

        </div>

        {{-- slide bar  --}}
        <div class="container">
            <div class="intro-display">
                <div class="row">
                    <div class="col-lg">
                        <div class="card" style="width: 18rem;">
                            <img src="https://cdn-brilio-net.akamaized.net/news/2020/02/06/178430/1171213-1000xauto-resep-ikan-bakar-enak.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">ikan bakar</h5>
                                <p class="card-text">RP 12.000</p>
                                <a href="#" class="btn btn-primary">pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/11/Resep-Nasgor-Gila.jpg?fit=1300%2C1258&ssl=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">nasi goreng</h5>
                                <p class="card-text">RP 14.000</p>
                                <a href="#" class="btn btn-primary">pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card" style="width: 18rem;">
                            <img src="https://1.bp.blogspot.com/-vDdbPxvc3vw/XpvsM7u-AgI/AAAAAAAAGo0/ZlM0-yQ6FykT5iPYCj6VH7-HLkCRsM5CQCLcBGAsYHQ/s1600/mie-ayam-dua-putra-jogja.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">mie ayam </h5>
                                <p class="card-text">RP 12.000</p>
                                <a href="#" class="btn btn-primary">pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card" style="width: 18rem;">
                            <img src="https://2.bp.blogspot.com/-Vr602Mc1-8Y/UcvF2L9J7II/AAAAAAAAAMU/AfupGPz2J6c/s1600/2013-06-19+19.27.18.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">burger</h5>
                                <p class="card-text">RP 10.000</p>
                                <a href="#" class="btn btn-primary">pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i2.wp.com/masfikr.com/fikrithoni/wp-content/uploads/2018/11/Cara-Membuat-Es-Teler-Nanas-travelingyuk.com-.jpg?resize=680%2C575" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">es teler</h5>
                                <p class="card-text">RP 6.000</p>
                                <a href="#" class="btn btn-primary">pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card" style="width: 18rem;">
                            <img src="https://dcostseafood.id/wp-content/uploads/2021/12/Es-teh-tawar-manis.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">teh es</h5>
                                <p class="card-text">RP 2.000</p>
                                <a href="#" class="btn btn-primary">pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <hr>
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
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Halaman Produk</h1>
            </div>
            <div class="col-sm-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" onclick="window.location.href='/form'" style="width: 50%" type="submit">Tambah Produk</button>
                </div>
            </div>
        </div>
        <table class="table table-primary table-striped table-bordered">

            <thead>
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Jenis Produk</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>

                <th>{{ $kode_produk[$i]}}</th>
                <th>{{$nama_produk[$i]}}</th>
                <th>{{$jenis_produk[$i]}}</th>
                <th>{{$harga[$i]}}</th>
                </tr>

            </tbody>

        </table>
    </div>
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
</body>

</html>