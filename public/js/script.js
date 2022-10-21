window.addEventListener('scroll', ()=>{
    let content = document.querySelector('.data');
    let contentPosition = content.getBoundingClientRect().top;
    let screenPosition = window.innerHeight;

    if(contentPosition < screenPosition){
        content.classList.add('active');
    }
})

window.addEventListener('scroll', ()=>{
    let content = document.querySelector('.images');
    let contentPosition = content.getBoundingClientRect().top;
    let screenPosition = window.innerHeight;

    if(contentPosition < screenPosition){
        content.classList.add('run');
    }
})