let body_product_nav = document.querySelectorAll('.body_product .body_product_nav>p');
let thongTinSanPham = document.querySelector('.body_product .thongTinSanPham');
let huongDanMuaHang = document.querySelector('.body_product .huongDanMuaHang');
let chinhSachDoiTra = document.querySelector('.body_product .chinhSachDoiTra');
let binhLuan = document.querySelector('.body_product .binhLuan');
body_product_nav.forEach((item,index)=>{
    item.addEventListener('click',()=>{
        if(index == 0){
            thongTinSanPham.classList.add('show_2')
          
            huongDanMuaHang.classList.remove('show_2')
            chinhSachDoiTra.classList.remove('show_2')
            binhLuan.classList.remove('show_2')
        }else if(index == 1){
            huongDanMuaHang.classList.add('show_2')

            thongTinSanPham.classList.remove('show_2')
            chinhSachDoiTra.classList.remove('show_2')
            binhLuan.classList.remove('show_2')
        }else if(index == 2){
            chinhSachDoiTra.classList.add('show_2')

            huongDanMuaHang.classList.remove('show_2')
            thongTinSanPham.classList.remove('show_2')
            binhLuan.classList.remove('show_2')
        }else if(index == 3){
            binhLuan.classList.add('show_2')

            huongDanMuaHang.classList.remove('show_2')
            chinhSachDoiTra.classList.remove('show_2')
            thongTinSanPham.classList.remove('show_2')
        }
    })

})