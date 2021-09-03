let ent = document.querySelector('.ent')
let login = document.querySelector('.login')

document.addEventListener("click",(e)=>{
   if (e.keyCode === 13){
        e.preventDefault();
        login.click();
   }
})




