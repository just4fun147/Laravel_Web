@include('perpus.partials.sidebar')


<head>
    <title>Dashboard</title>
</head>
<div class="container p-3 m-4 h-100 shadow-lg"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>Selamat Datang di Perpustakaan Jalur Literasi</h4>
    <hr>
    @if($user->name == "admin")
        <div class="row d-flex justify-content-center">
            <div class="col">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h5 class="fw-bold">List Buku</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="/img/books.png" alt="" srcset="" style="width: 20rem;">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-auto">
                                <p>Total Jenis Buku Tersedia:<b>{{ $totalDataBuku }}</b>
                                </p>
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2">
                                    <a href="/listBuku" class="btn btn-success">Lihat Selengkapnya</a>
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
                                <img src="/img/peminjaman.png" alt="" srcset="" style="width: 12rem;">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-auto">
                                    <p>Total Buku Sedang Dipinjam:<b>{{ $totalDataPeminjaman }}</b>
                                    </p>
                                </div>
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <a href="/listPeminjam" class="btn btn-success">Lihat
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
                            <img src="/img/magazine.png" alt="" srcset="" style="width: 20rem;">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-auto">
                                <p>Total Majalah Tersedia:<b>{{ $totalMajalah }}</b>
                                </p>
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2">
                                    <a href="/listMajalah" class="btn btn-success">Lihat Selengkapnya</a>
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
                            <img src="/img/peminjaman.png" alt="" srcset="" style="width: 10.8rem;">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-auto">
                                <p>Total Majalah Terbeli:<b>{{ $totalPembelian }}</b></p>
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2">
                                    <a href="/listPembeli" class="btn btn-success">Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @if($buku!=null)
            @forelse($buku as $item)
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="card shadow-lg">
                        <div class="card-header text-center">
                            <h5 class="fw-bold">Buku Terlaris Bulan Ini</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('storage/'.$item->gambar) }}" class="img-thumbnail" width="300">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="card-header text-center">
                                    <h5 class="fw-bold">{{ $item->judul }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            <h1>Hai {{ $user->name }}</h1>
            @endforelse
        @else
            <h1>Hai {{ $user->name }}</h1>
        @endif
    @endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>