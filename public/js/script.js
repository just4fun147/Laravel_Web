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

function otherName(){
    var input = document.getElementById("userInput").value;
    alert(input);
};

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbarTop").add
  } else {
    document.getElementById("navbarTop").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}


const slideGallery = document.querySelector('.slides');
const scrollbarThumb = document.querySelector('.thumb');
const slideCount = slides.length;
const slideHeight = 720;
const marginTop = 16;

const scrollThumb = () => {
  const index = Math.floor(slideGallery.scrollTop / slideHeight);
  scrollbarThumb.style.height = `${((index + 1) / slideCount) * slideHeight}px`;
};

const scrollToElement = el => {
  const index = parseInt(el.dataset.id, 10);
  slideGallery.scrollTo(0, index * slideHeight + marginTop);
};

document.querySelector('.thumbnails').innerHTML += [...slides]
  .map(
    (slide, i) => `<img src="${slide.querySelector('img').src}" data-id="${i}">`
  )
  .join('');

document.querySelectorAll('.thumbnails img').forEach(el => {
  el.addEventListener('click', () => scrollToElement(el));
});

slideGallery.addEventListener('scroll', e => scrollThumb());

scrollThumb();

window.addEventListener('scroll', ()=>{
    let content = document.querySelector('.sliding');
    let contentPosition = content.getBoundingClientRect().top;
    let screenPosition = window.innerHeight;

    if(contentPosition < screenPosition){
        content.classList.add('go');
    }else{
        content.classList.remove('go');
    }
})


window.addEventListener('scroll', ()=>{
    let content = document.querySelector('.firstAbout');
    let contentPosition = content.getBoundingClientRect().top;
    let screenPosition = window.innerHeight;

    if(contentPosition < screenPosition){
        content.classList.add('run2');
    }
})

function email(){
  window.open('mailto:pauluswindito1@gmail.com');
}

function contact(){
  window.open('/contact','_self');
}
function work(){
  window.open('/work','_self');
}
function about(){
  window.open('/about','_self');
}








