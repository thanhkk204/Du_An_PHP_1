let decline = document.querySelectorAll(".show_product_right_buy_btn .decline")
let prd_number = document.querySelectorAll(
  ".show_product_right_buy_btn .prd_number"
)
let increase = document.querySelectorAll(
  ".show_product_right_buy_btn .increase"
)
let product_price = document.querySelectorAll(".product_price")
let total = document.querySelectorAll(".product_total")

let money = document.querySelector(".money")
const checkOut = document.querySelector('.checkOut')

const xmark = document.querySelectorAll('.xmark')
// Chức năng tính tiền
let tong = 0

total.forEach((element, index) => {
  tong += Number(element.innerText)
})
money.innerText = tong

decline.forEach((element, index) => {
  element.addEventListener("click", () => {
    let so_luong_sanPham = Number(prd_number[index].innerText)
    if (so_luong_sanPham > 1) {
      so_luong_sanPham--
      prd_number[index].innerText = so_luong_sanPham
      const newTotal = so_luong_sanPham * Number(product_price[index].innerText)
      total[index].innerText = newTotal
    }
    let tong = 0

    total.forEach((element, index) => {
      tong += Number(element.innerText)
    })
    money.innerText = tong
  })
})

increase.forEach((element, index) => {
  element.addEventListener("click", () => {
    let so_luong_sanPham = Number(prd_number[index].innerText)

    so_luong_sanPham++
    prd_number[index].innerText = so_luong_sanPham
    const newTotal = so_luong_sanPham * Number(product_price[index].innerText)
    total[index].innerText = newTotal

    let tong = 0

    total.forEach((element, index) => {
      tong += Number(element.innerText)
    })
    money.innerText = tong
  })
})

// Nút thanh toán
checkOut.addEventListener('click' , ()=>{
   let cart = JSON.parse(localStorage.getItem('cart'))

   prd_number.forEach((element, index) => {
      cart[index].quatity =  Number(element.innerText)
  })
  localStorage.setItem('cart' , JSON.stringify(cart))

  document.cookie = `carts=${JSON.stringify(cart)}; expires=${new Date("2024-01-01 00:00:00").toUTCString()}`
})

// Nút xóa sản phầm 
xmark.forEach((item , index) =>{
  item.addEventListener('click', ()=>{
    window.location.href = "./setCookie.php?act=deleteItem&id="+index;
  })
})