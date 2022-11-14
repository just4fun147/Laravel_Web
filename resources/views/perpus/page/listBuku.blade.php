@include('perpus.partials.sidebar')

<head>
    <title>List Buku</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">LIST BUKU</h4>
        @if($user->name =="admin")
            <form action="{{ route('buku.create')}}" method="GET">  
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
                <th scope="col">Nama Buku</th>
                <th scope="col">Gambar</th>
                <th scope="col">Jumlah Tersedia</th>
                @if($user->name!="admin")
                    <th scope="col">Pinjam</th>                
                @else
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>
                @endif
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
                @forelse ($buku as $item) 
                <tr> 
                    <th scope="row">{{ $no }}</th> 
                    <td>{{ $item->judul }}</td> 
                    <td><img src="{{ asset('storage/'.$item->gambar) }}" style="width:150px"> </td>
                    <td>{{ $item->jumlah }}</td> 
                    <td>
                        @if($user->name!="admin")
                            @if($item->jumlah!=0)
                                <form action="/pinjam" method="post">
                                <input type="text" id="id" name="id" value="{{ $item->id }}" hidden/>
                                @csrf
                                    <button type="submit" style="border: 0; background-color: transparent;">
                                        <a> <i style="color: blue" class="fas fa-book fa-2x"></i></a>
                                    </button>
                                </form>
                            @else
                                <form action="" onSubmit="alert('Buku Sudah Habis')" >
                                    <button type="submit" style="border: 0; background-color: transparent;">
                                        <a> <i style="color: blue" class="fas fa-book fa-2x"></i></a>
                                    </button>
                                </form>
                                </td>
                            @endif
                        @else
                            <form action="{{ route('buku.edit', $item->id) }}" method="put">
                                <button type="submit" style="border: 0; background-color: transparent;">
                                    <a> <i style="color: red" class="fa fa-pencil fa-2x"></i></a>
                                </button>
                            </form> 
                            <td>
                            <form action="{{ route('buku.destroy', $item->id) }}" method="POST">  
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
                    <td colspan="7"> Tidak ada buku </td> 
                </tr>
                @endforelse    
        </tbody>
    </table>
    {{$buku->links()}}
</div>
</aside>
</body>
</html>
