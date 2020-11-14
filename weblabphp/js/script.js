const btnHamburger = document.querySelector('#btnHamburger');
const body = document.querySelector('body');
const header = document.querySelector('.header');
const overlay = document.querySelector('.overlay');
const fadeElems = document.querySelectorAll('.has-fade');


btnHamburger.addEventListener('click', function(){
     console.log('open hamburger');

     if(header.classList.contains('open')){ //closemenu
          body.classList.remove('noscroll');
          header.classList.remove('open');
          fadeElems.forEach(function(element){
               element.classList.remove('fade-in');
               element.classList.add('fade-out');
          });

     }
     else{ //open mobile menu
     body.classList.add('noscroll');
     header.classList.add('open');
     fadeElems.forEach(function(element){
          element.classList.remove('fade-out');
          element.classList.add('fade-in');

     });

     }
});

const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
});

