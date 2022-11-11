@extends('layouts.main')

@section('container')
    <div class="content-header"> 
        <div class="container-fluid"> 
            <div class="row mb-2"> 
                <div class="col-sm-6"> 
                    <h1 class="m-0">Tambah Movie</h1> 
                </div> 
                <!-- /.col --> 
                <div class="col-sm-6"> 
                    <ol class="breadcrumb float-sm-right"> 
                        <li class="breadcrumb-item"> 
                            <a href="#">Movie</a> 
                        </li> 
                        <li class="breadcrumb-item active">Create</li> 
                    </ol>
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
                            <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data"> 
                                @csrf 
                                <div class="form-row"> 
                                    <div class="form-group col-md-12"> 
                                        <label class="font-weight-bold">Judul</label> 
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul Movie"> 
                                        @error('judul') 
                                        <div class="invalid-feedback"> {{ $message }} </div> 
                                        @enderror 
                                    </div> 
                                </div> 
                                <div class="form-row"> 
                                    <div class="form-group col-md-6"> 
                                        <label class="font-weight-bold">Name</label> 
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Anda"> 
                                        @error('name') 
                                        <div class="invalid-feedback"> {{ $message }} </div> 
                                        @enderror
                                    </div> 
                                    <div class="form-group col-md-6"> 
                                        <label class="font-weight-bold">Rating</label> 
                                        <input type="number" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" placeholder="Masukkan Rating Movie"> 
                                        @error('rating') 
                                        <div class="invalid-feedback"> {{ $message }} </div> 
                                        @enderror 
                                    </div> 
                                </div> 
                                <button type="submit" class="btn btn-md btn-primary">Save</button> 
                            </form> 
                        </div> 
                    </div> 
                </div> 
            </div>
        </div> 
    </div> 
@endsection