
let Menubtn= document.querySelector('.menu-btn');

Menubtn.addEventListener('click', (e) =>{
  
       let fabars = document.querySelector('.fa-bars');

       let menu = document.querySelector(".menu");
       fabars.classList.toggle("active");
       menu.classList.toggle("activemn");
    
});