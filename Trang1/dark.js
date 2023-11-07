let switch_change = document.querySelector('#switch_change')
let body = document.querySelector('body')
switch_change.addEventListener('click',()=>{
    body.classList.toggle('dark')
})
