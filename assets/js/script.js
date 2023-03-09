
let Menubtn= document.querySelector('.menu-btn');

Menubtn.addEventListener('click', (e) =>{
  
       let fabars = document.querySelector('.fa-bars');

       let menu = document.querySelector(".menu");
       fabars.classList.toggle("active");
       menu.classList.toggle("activemn");
    
});

// get value of input in index.php 
//const tagA = document.querySelector('#myshopping');

//tagA.href = "https://www.google.com.br"

//console.log(tagA);



// 
let urlNow = window.location 

document.querySelector('.menu li a[href="'+urlNow+'"]').classList.add('active');