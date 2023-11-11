let url = window.location.search
let act = url.split("?act=")[1]
console.log(act)

if(act == 'setCart'){
    const products = localStorage.getItem("cart")
    document.cookie = `carts=${products}; expires=${new Date("2024-01-01 00:00:00").toUTCString()}`
    
    window.location.href = "./cart.php";
}


// // Xóa sản phẩm 

let id = act.split('&id=')[1];
if(id && id != 'undifined'){
    const products = JSON.parse(localStorage.getItem("cart"))
    const newCart = products.filter((item , index) =>{
        return index !=id
    })
    localStorage.setItem('cart' , JSON.stringify(newCart))
    document.cookie = `carts=${JSON.stringify(newCart)}; expires=${new Date("2024-01-01 00:00:00").toUTCString()}`

    window.location.href = "./cart.php";
}