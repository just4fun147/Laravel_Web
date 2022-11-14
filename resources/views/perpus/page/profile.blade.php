@include('perpus.partials.sidebar')


<head>
    <title>Profile</title>
</head>
<div class="container p-3 m-4 h-100 d-flex justify-content-center"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <span><img class="img-preview img-fluid mt-5" src="{{ asset('storage/'.$user->image) }}" style="clip-path:circle(); width:300px"></span>
                <span class="font-weight-bold mt-2">{{ $user->name }}</span>
                <span class="text-black-50">{{ $user->email }}</span><span>
                </span>
            </div>
        </div>

        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-center align-items-center mb-2">
                    <h4 class="text-center"><b>CHANGE PROFILE</b></h4>
                </div>

                <form action="{{ route('user.destroy', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Name User</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" id="name" name="name"
                                    value="{{ $user->name }}" required>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Email ID</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" id="email" name="email"
                                    value="{{ $user->email }}" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Profil Picture</label>
                                <input type="hidden" name="oldImage" value="{{ $user->image }}">
                                <input class="@error('image') is-invalid @enderror" type="file" accept="image/jpeg" class="form-control" name="image" id="image" value="{{ $user->image }}" onchange="previewImage()">
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Change Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" id="password"
                                name="password">
                                @error('password')
                                <div class="invalid-feedback">
                                    Password minimal 6 karakter terdiri dari huruf besar, kecil, angka, dan simbol
                                </div>
                                @enderror
                            </div>
                        </div>

            <div class="row">
                <div class="d-grid gap-2 col-md-3 mt-3">
                    <button type="submit" class="btn btn-warning" name="saveBtn" style="background-color:#ff4e44;">Save
                        Update</button>
                </div>

                <div class="d-grid gap-2 col-md-3 mt-3">
                    <a class="btn btn-warning" href="/dashboard" role="button"
                        style="background-color:#ff4e44;">Cancel
                        Update</a>
                </div>
            </div>
            <form>
        </div>
    </div>
</div>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script defer src="/js/scriptPerpus.js"></script>
</body>
</html>