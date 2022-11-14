@include('perpus.partials.sidebar')

<head>
    <title>List Pembeli</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">LIST PEMBELI PERNAH MEMBELI MAJALAH</h4>
    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Judul Majalah</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pembelian as $item)
            @php
                $no++;
            @endphp
            <tr> 
                <th scope="row">{{ $no }}</th>
                @foreach ($pembelis as $pembeli)
                    @foreach ($majalahs as $majalah)
                        @if($item->pembeli_id == $pembeli->id && $item->majalah_id == $majalah->id)
                            <td>{{ $pembeli->name }}</td>
                            <td>{{ $majalah->judul }}</td>
                        @endif
                    @endforeach
                @endforeach 
                <td>{{ $item->status }}</td>
            </tr>
            @empty
                <tr> 
                    <td colspan="7"> Belum Ada Pembeli </td> 
                </tr>
            @endforelse    
        </tbody>
    </table>
    {{$pembelian->links()}}
</div>
</aside>
</body>
</html>