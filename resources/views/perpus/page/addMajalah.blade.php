@include('perpus.partials.sidebar')

<head>
    <title>Tambah Majalah</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">TAMBAH Majalah</h4>

    </div>
    <hr>
    <table>
        <form action="/majalah" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
            @csrf
            <tr>
                <td>Nama Majalah</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2 @error('judul') is-invalid @enderror" type="text" id="judul" name="judul"
                    value="{{ old('judul') }}" placeholder="Judul Majalah" />
                </td>
                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
            </tr>
            <tr>
                <td>Topik</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2 @error('topik') is-invalid @enderror" type="text" id="topik" name="topik"
                    value="{{ old('topik') }}" placeholder="Topik Majalah" />
                </td>
                @error('topik')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
            </tr>
            <tr>
                <td>Jumlah Halaman</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2 @error('jumlah_halaman') is-invalid @enderror" type="number" id="jumlah_halaman" name="jumlah_halaman"
                    value="{{ old('jumlah_halaman') }}" placeholder="Jumlah Halaman" />
                </td>
                @error('jumlah_halaman')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
            </tr>
            <tr>
                <td>Harga Majalah</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2 @error('harga') is-invalid @enderror" type="numeric" id="harga" name="harga"
                    value="{{ old('harga') }}" placeholder="Harga Majalah" />
                </td>
                @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-warning" name="confirm"
                        style="background-color:#ff4e44;">Konfirmasi</button>
                    <a class="btn btn-warning" href="/listBuku" role="button"
                        style="background-color:#ff4e44;">Batal</a>
                </td>
            </tr>
        </form>
    </table>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>