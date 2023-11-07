let signIn = document.querySelector('.SignIn_Switch .signIn')
let register = document.querySelector('.register')
signIn.addEventListener('click',(e)=>{
    register.classList.add('show')
})

register.addEventListener('click',(e)=>{
    if(e.target == e.currentTarget){
        register.classList.remove('show')
    }
})