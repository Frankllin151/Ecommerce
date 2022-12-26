//****login and register  */

let btnLogin = document.querySelector('.login-button');

let btnRegister = document.querySelector('.register-button');

btnLogin.addEventListener('click', e => {
    document.querySelector('#register-btn').classList.add('active-lg-rg');
    document.querySelector('.area-login').style.display = 'block'
    document.querySelector('.area-register').style.display = 'none'
   document.querySelector('.register-button').classList.remove('active-lg-rg');
   document.querySelector('.login-button').classList.add('active-lg-rg');
  
})

btnRegister.addEventListener('click', e => {
    document.querySelector('#login-btn').classList.remove('active-lg-rg');
    document.querySelector('.area-login').style.display = 'none'
     
    document.querySelector('.area-register').style.display = 'block'
   document.querySelector('.register-button').classList.add('active-lg-rg');
  

})