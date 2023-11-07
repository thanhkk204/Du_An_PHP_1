let product = document.querySelectorAll('.product')
let watch_shoe = document.querySelectorAll('.product .watch_shoe')
let i_heart = document.querySelectorAll('.product>i')

product.forEach((item,index)=>{
    item.addEventListener('mouseover',(e)=>{
        watch_shoe[index].classList.add('show')
    })
})

product.forEach((item,index)=>{
    item.addEventListener('mouseover',(e)=>{
        watch_shoe[index].classList.add('show')
    })

    item.addEventListener('mouseout',(e)=>{
        watch_shoe[index].classList.remove('show')
    })
})

watch_shoe.forEach((item)=>{
    item.addEventListener('click',(e)=>{
        alert('Bạn đã thêm sản phẩm vào giỏ hàng')
    })
})

i_heart.forEach((item)=>{
    item.addEventListener('click',()=>{
        item.classList.toggle('favourite')
        console.log('item')
    })
})


// watch_all

let watch_all = document.querySelectorAll('.watch_all');
let watch_all_span = document.querySelectorAll(' .watch_all > span')
let watch_all_i = document.querySelectorAll('.watch_all > i')

watch_all.forEach((item,index)=>{
    item.addEventListener('mouseover',(e)=>{
        watch_all_span[index].classList.add('hide')
        item.style.backgroundColor = 'var(--text_color)'
        watch_all_i[index].style.color = 'var( --background_color)'
        watch_all_i[index].classList.add('watch_all_animation')
    })
    
})

watch_all.forEach((item,index)=>{
    item.addEventListener('mouseout',(e)=>{
        watch_all_span[index].classList.remove('hide')
        item.style.backgroundColor = 'var(--background_color)'
        watch_all_i[index].style.color = 'var( --text_color)'
        watch_all_i[index].classList.remove('watch_all_animation')
    })
    
})
