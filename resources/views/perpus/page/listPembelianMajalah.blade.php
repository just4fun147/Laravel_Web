@include('perpus.partials.sidebar')

<head>
    <title>List Pembelian Majalah</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">LIST PEMBELIAN MAJALAH</h4>

        <h4 style="flex: 1 1 50%; text-align: right;">

    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Majalah</th>
                <th scope="col">Topik</th>
                <th scope="col">Jumlah Halaman</th>
                <th scope="col">Harga</th>
                <th scope="col">Status</th> 
                @if($user->name!="admin") 
                    <th scope="col">Bayar</th>
                    <th scope="col">Batal</th>
                @endif
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($pembelian as $item)
                @php
                    $no++;
                @endphp
                @foreach($majalahs as $majalah)
                    @if($majalah->id== $item->majalah_id)
                        <tr> 
                            <th scope="row">{{ $no }}</th> 
                            <td>{{ $majalah->judul }}</td>  
                            <td>{{ $majalah->topik }}</td>  
                            <td>{{ $majalah->jumlah_halaman }}</td>  
                            <td>{{ $majalah->harga }}</td>  
                            <td>{{ $item->status }}</td>
                            @if($item->status!="Lunas")
                                <td>
                                    <form action="/bayar" method="post">
                                        <input type="text" id="id" name="id" value="{{ $item->id }}" hidden/>
                                        @csrf
                                        <button type="submit" style="border: 0; background-color: transparent;">
                                            <a> <i style="color: green" class="fa fa-money fa-2x"></i></a>
                                        </button>
                                    </form>
                                    </td>
                                    <td>
                                        <form action="/batal" method="POST">  
                                            <input type="text" id="id" name="id" value="{{ $item->id }}" hidden/>
                                            @csrf
                                            <button type="submit" style="border: 0; background-color: transparent;">
                                                <a> <i style="color: red" class="fa fa-times fa-2x"></i></a>
                                            </button>
                                        </form>
                                    </td>
                                @else
                                    <td></td>
                                    <td></td>
                                @endif
                        </tr>
                    @endif
                @endforeach
            @empty
            <tr> 
                <td colspan="7"> Tidak ada buku </td> 
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
</aside>
</body>
</html>