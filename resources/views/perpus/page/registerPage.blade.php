@extends('perpus.main')

@section('container')
<div class="bg bg-light text-dark">
    <div class="container min-vh-100 mt-5 d-flex align-items-center justifycontent-center">
        <div class="card text-white p-3 mb-2 bg-dark ma-5 shadow " style="min-width: 25rem;">

            <form action="/register" method="post" enctype="multipart/form-data">
                @csrf
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <div class="mb-3">
                    <input class="form-control @error('nama') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp" required value="{{ old('nama') }}">
                    @error('name')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <div class="mb-3"> 
                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
                    @error('email')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="exampelInputEmail1">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="fa fa-eye-slash" id="togglePassword" 
                       style="cursor: pointer"></i>
                       </span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="">
                    @error('password')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Password must contain uppercase, lowercase, number, and symbol!
                    </div>
                    @enderror
                </div>
            <!--    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Photo</label>
                    <input type="file" accept="image/jpeg" class="form-control" id="password" name="photo">
                </div> -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="register"
                        style="background-color:#ff4e44;">Register</button>
                </div>
            </form>
            <p class="mt-2 mb-0">You already have an account?
                <a href="/perpus/page/loginPage" class="textprimary">Please Sign in!</a>
            </p>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
    
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    // toggle the eye icon
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
</script>
@endsection