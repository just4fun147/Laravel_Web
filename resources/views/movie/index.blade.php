@extends('layouts.main')
@section('container')
<div class="content-header"> 
    <div class="container-fluid"> 
        <div class="row mb-2">
            <div class="col-sm-6"> 
                <h1 class="m-0">Movie</h1> 
            </div> 
        </div> 
    </div> 
</div> 
<!-- Main content --> 
<div class="content"> 
    <div class="container-fluid"> 
        <div class="row"> 
            <div class="col-12"> 
                <div class="card"> 
                    <div class="card-body"> 
                        <a href="{{ route('movie.create') }}" class="btn btn-md btn-success mb-3">TAMBAH MOVIE</a>
                        <div class="table-responsive p-0"> 
                            <table class="table table-hover text-nowrap"> 
                                <thead> 
                                    <tr> 
                                        <th class="text-center">Judul</th> 
                                        <th class="text-center">Nama</th> 
                                        <th class="text-center">Rating</th> 
                                        <th class="text-center">Aksi</th>
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    @forelse ($movie as $item) 
                                    <tr> 
                                        <td class="text-center">{{ $item->judul }}</td> 
                                        <td class="text-center">{{ $item->name }}</td> 
                                        <td class="text-center">{{ $item->rating }}</td>
                                        <td class="text-center"> 
                                        
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('movie.destroy', $item->id) }}" method="POST">  
                                                @method('DELETE') 
                                                @csrf     
                                                <a href="{{ route('movie.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a> 
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button> 
                                            </form> 
                                        </td>
                                    </tr> 
                                    @empty 
                                    <div class="alert alert-danger"> Data Movie belum tersedia </div> 
                                    @endforelse 
                                </tbody> 
                            </table> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
    {{$movie->links()}}
 </div> 

@endsection