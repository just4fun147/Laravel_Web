@include('perpus.partials.sidebar')

<?php
$name = auth()->user()->name;
$totalDataBuku = DB::table('bukus')->count();
$totalDataPeminjaman = DB::table('peminjamen')->where('status','Dipinjam');
$totalMajalah = DB::table('bukus')->count();
$totalPembelian = DB::table('pembelians')->where('status','Dipinjam');
echo'
<head>
    <title>Dashboard</title>
</head>
<div class="container p-3 m-4 h-100 shadow-lg"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>Selamat datang di perpustakaan Jalur Literasi</h4>
    <hr>';

    if ($name == "admin") {
        echo'
        <div class="row d-flex justify-content-center">
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h5 class="fw-bold">List Buku</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/images/books.png" alt="" srcset="" style="width: 20rem;">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-auto">
                            <p>Total Jenis Buku Tersedia:'. $totalDataBuku.'
                            </p>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="../Page/listBukuPage.php" class="btn btn-success">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h5 class="fw-bold">List Peminjaman Buku</h5>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="../assets/images/peminjaman.png" alt="" srcset="" style="width: 13rem;">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-auto">
                                <p>Total Buku Sedang Dipinjam:'.$totalDataPeminjaman.'
                                </p>
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2">
                                    <a href="../Page/listPeminjamPage.php" class="btn btn-success">Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h5 class="fw-bold">List Majalah</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/images/magazine.png" alt="" srcset="" style="width: 20rem;">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-auto">
                            <p>Total Majalah Tersedia: '.$totalMajalah.'
                            </p>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="../Page/listMajalahPage.php" class="btn btn-success">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h5 class="fw-bold">List Pembelian Majalah</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/images/peminjaman.png" alt="" srcset="" style="width: 13rem;">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-auto">
                            <p>Total Majalah Terbeli: '.$totalPembelian.'</p>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="../Page/listPembeliPage.php" class="btn btn-success">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    }else{
        echo'
        <h1>Hai '.$name.'</h1>';
    }
    echo'
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>';