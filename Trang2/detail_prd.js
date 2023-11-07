let decline = document.querySelector('.show_product_right_buy .show_product_right_buy_btn .decline')
let prd_number = document.querySelector('.show_product_right_buy .show_product_right_buy_btn .prd_number')
let increase = document.querySelector('.show_product_right_buy .show_product_right_buy_btn .increase')

let so_luong_sanPham = Number(prd_number.innerText);
decline.addEventListener('click',(e)=>{
    if(so_luong_sanPham>0){
    so_luong_sanPham -- ;
    prd_number.innerText = so_luong_sanPham
    }
})

increase.addEventListener('click',(e)=>{
    if(so_luong_sanPham>=10){
        alert('Định Đặt Xong Bom Hàng À ???')
        return
    }
    so_luong_sanPham ++ ;
    prd_number.innerText = so_luong_sanPham
})