const getDropdown = document.getElementById("button-click-open-drop");
const getBody = document.querySelector('body');
getDropdown.addEventListener('click', (e) =>{
    document.getElementById('drop-down').classList.toggle('show');
  
});
// change text of button for tag <a> of html dropdown
var getdropA = document.querySelectorAll('.tagaget');

getdropA.forEach(txtTagA =>{
               txtTagA.addEventListener('click' , (e) =>{
                           const text = e.target.textContent; 
                           const button = document.getElementById('button-click-open-drop'); 
                           button.textContent = text;
               });
});

window.addEventListener('click', (even)  => {
   if(!even.target.matches('.btn-opn')){
    var dropdowns  = document.getElementsByClassName('dropdown-content');
   
    var i;
    for(i = 0; i < dropdowns.length; i++){
              var Opendropdown =  dropdowns[i];
             
              if(Opendropdown.classList.contains('show')){
                           Opendropdown.classList.remove("show");
                           
                         
              }
    }

   }
});