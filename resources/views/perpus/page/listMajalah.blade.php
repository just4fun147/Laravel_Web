@include('perpus.partials.sidebar')


<head>
    <title>List Majalah</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">LIST MAJALAH</h4>
        @if($user->name=="admin")
            <form action="{{ route('majalah.create')}}" method="GET">
                <button type="submit" style="border: 0; background-color: transparent;">
                    <a> <i style="color: blue; background-color=transparent;" class="fa fa-add fa-2x"></i> </a>
                </button>
            </form>
        @endif
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
                @if($user->name!="admin")
                    <th scope="col">Beli</th>
                @else
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>
                @endif
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($majalah as $item) 
                <tr> 
                    <tr> 
                        <th scope="row">{{ $no }}</th> 
                        <td>{{ $item->judul }}</td> 
                        <td>{{ $item->topik }}</td> 
                        <td>{{ $item->jumlah_halaman }}</td> 
                        <td>{{ $item->harga }}</td>
                        <td>
                            @if($user->name!="admin")
                                <form action="/beli" method="post">
                                    <input type="text" id="id" name="id" value="{{ $item->id }}" hidden/>
                                    @csrf
                                        <button type="submit" style="border: 0; background-color: transparent;">
                                            <a> <i style="color: blue" class="fas fa-book fa-2x"></i></a>
                                        </button>
                                </form>
                            </td>
                        @else
                            <form action="{{ route('majalah.edit', $item->id) }}" method="put">
                                <button type="submit" style="border: 0; background-color: transparent;">
                                    <a> <i style="color: red" class="fa fa-pencil fa-2x"></i></a>
                                </button>
                            </form> 
                            <td>
                            <form action="{{ route('majalah.destroy', $item->id) }}" method="POST">  
                                @method('DELETE') 
                                @csrf
                                <button type="submit" style="border: 0; background-color: transparent;">
                                    <a> <i style="color: red" class="fa fa-trash fa-2x"></i></a>
                                </button>
                            </form>
                            </td>
                        @endif
                </tr>
                @php
                $no++;
                @endphp
                @empty
                <tr> 
                    <td colspan="7"> Tidak ada majalah </td> 
                </tr>
                @endforelse    
        </tbody>
    </table>
</div>
</aside>
</body>
</html>
