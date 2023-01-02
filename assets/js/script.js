
let Menubtn= document.querySelector('.menu-btn');

Menubtn.addEventListener('click', (e) =>{
  
       let fabars = document.querySelector('.fa-bars');

       let menu = document.querySelector(".menu");
       fabars.classList.toggle("active");
       menu.classList.toggle("activemn");
    
});


let urlNow = window.location 

document.querySelector('.menu li a[href="'+urlNow+'"]').classList.add('active');