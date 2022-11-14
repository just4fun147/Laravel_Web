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

    function previewImage(){
        const image = document.querySelector('#image');
        const preview = document.querySelector('.img-preview');

        preview.style.display = 'block';
        preview.removeAttribute("hidden");
        
        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);
        ofReader.onload = function(oFREvent){
            preview.src=oFREvent.target.result;
        } 
    }

    function changeImage(){
        const image = document.querySelector('#gambar');
        const preview = document.querySelector('.img-preview');

        preview.style.display = 'block';
        
        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);
        ofReader.onload = function(oFREvent){
            preview.src=oFREvent.target.result;
        } 
    }
    function previewImage2(){
        const image = document.querySelector('#gambar');
        const preview = document.querySelector('.img-preview');

        preview.style.display = 'block';
        preview.removeAttribute("hidden");
        
        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);
        ofReader.onload = function(oFREvent){
            preview.src=oFREvent.target.result;
        } 
    }