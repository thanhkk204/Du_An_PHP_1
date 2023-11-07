let image_large = document.querySelector('.show_product .show_product_left .image_large>img')
let images = document.querySelectorAll('.show_product .show_product_left .images>img');



var current_img = 0 ;
images.forEach((item,index)=>{
    item.addEventListener('click',(e)=>{
       
        if(index != current_img ){
            images[current_img].style.border = ''
            images[index].style.border = '1px solid black'
            current_img = index;
        }else{
            images[index].style.border = '1px solid black'
            current_img = index ;
        }
        image_large.src = e.target.src

    })
})
// Image Large 
let zoomToImage = document.querySelector('.zoomToImage')
let zoomToImage_img = document.querySelector('.zoomToImage>img')
let backWard = document.querySelector('.zoomToImage .fa-backward')
let forWard = document.querySelector('.zoomToImage .fa-forward')
let xMark = document.querySelector('.zoomToImage .fa-xmark')

//Xử lí phóng to ảnh 

image_large.addEventListener('dblclick',(e)=>{
    zoomToImage_img.src = images[current_img].src
    zoomToImage.classList.add('show')
})
// Sử lí 3 nút
backWard.addEventListener('click',()=>{
    if(current_img == 0) {
        current_img = images.length -1
        zoomToImage_img.src = images[current_img].src
    }else{
        current_img -- ;
        zoomToImage_img.src = images[current_img].src
    }
})
forWard.addEventListener('click',()=>{
    if(current_img == images.length -1) {
        current_img = 0
        zoomToImage_img.src = images[current_img].src
    }else{
        current_img ++ ;
        zoomToImage_img.src = images[current_img].src
    }
})
xMark.addEventListener('click',()=>{
    zoomToImage.classList.remove('show')
})
// xử lí ấn ngoài
zoomToImage.addEventListener('click',(e)=>{
    if(e.target == e.currentTarget){
        zoomToImage.classList.remove('show')
    }
})

// zoomToMore
let zoomToMore = document.querySelector('.zoomToMore')
zoomToImage_img.addEventListener('mousemove',(e)=>{
    zoomToMore.style.background = `url(${images[current_img].src}) no-repeat`
    console.log(images[current_img].src)

    zoomToMore.classList.add('show_2')
    zoomToMore.style.top = `${e.clientY}px`
    zoomToMore.style.left = `${e.clientX}px`
    let percentOfMouseX = Math.round( (e.offsetX / e.target.offsetWidth) * 100 );
    let percentOfMouseY = Math.round((e.offsetY / e.target.offsetHeight) * 100);
    zoomToMore.style.backgroundPosition = `${percentOfMouseX}%  ${percentOfMouseY}%`

})
zoomToImage_img.addEventListener('mouseout',(e)=>{
    
    zoomToMore.classList.remove('show_2')
   

})