let decline = document.querySelectorAll(".show_product_right_buy_btn .decline")
let prd_number = document.querySelectorAll(
  ".show_product_right_buy_btn .prd_number"
)
let increase = document.querySelectorAll(
  ".show_product_right_buy_btn .increase"
)
let getTotalQuality = document.querySelectorAll('.getTotalQuality')
let product_price = document.querySelectorAll(".product_price")
let total = document.querySelectorAll(".product_total")

let money = document.querySelector(".money")
const checkOut = document.querySelector('.checkOut')

const xmark = document.querySelectorAll('.xmark')
// Chức năng tính tiền
let tong = 0

total.forEach((element, index) => {
  // Format 500.000 => 500000
  let parts = element.innerText.split(".")
  let string = parts.join("");
  tong += Number(string)
}) 
// Format 500.000 => 500000
let formattedNumber = tong.toLocaleString("vi-VN");
money.innerText = formattedNumber + " VND"

decline.forEach((element, index) => {
  element.addEventListener("click", () => {
    let so_luong_sanPham = Number(prd_number[index].innerText)
    if (so_luong_sanPham > 1) {
      so_luong_sanPham--
      prd_number[index].innerText = so_luong_sanPham
      // Format 500.000 => 500000
      let partsOfProductPrice = product_price[index].innerText.split(".")
      let stringOfProductPrice = partsOfProductPrice.join("");

      let newTotal = so_luong_sanPham * Number(stringOfProductPrice)
      let formatNewTotal = newTotal.toLocaleString("vi-VN");
      total[index].innerText = formatNewTotal
    }
    let tong = 0

    total.forEach((element, index) => {
      // Format 500.000 => 500000
      let parts = element.innerText.split(".")
      let string = parts.join("");
      tong += Number(string)
    })
    // Format 500.000 => 500000
    let formattedNumber = tong.toLocaleString("vi-VN");
    money.innerText = formattedNumber + " VND"
  })
})

increase.forEach((element, index) => {
  element.addEventListener("click", () => {
    let so_luong_sanPham = Number(prd_number[index].innerText)
    
    if(so_luong_sanPham < Number(getTotalQuality[index].innerText)){

      so_luong_sanPham++
      prd_number[index].innerText = so_luong_sanPham

      // Format 500.000 => 500000
      let partsOfProductPrice = product_price[index].innerText.split(".")
      let stringOfProductPrice = partsOfProductPrice.join("");

      let newTotal = so_luong_sanPham * Number(stringOfProductPrice)
      let formatNewTotal = newTotal.toLocaleString("vi-VN");
      total[index].innerText = formatNewTotal
  
      let tong = 0
  
      total.forEach((element, index) => {
        // Format 500.000 => 500000
        let parts = element.innerText.split(".")
        let string = parts.join("");
        tong += Number(string)
      })
      // Format 500.000 => 500000
      let formattedNumber = tong.toLocaleString("vi-VN");
      money.innerText = formattedNumber + " VND"
    }else{
      alert('Số lượng bạn đặt vượt quá số lượng trong kho')
    }
  })
})

// Nút thanh toán
checkOut.addEventListener('click' , ()=>{
  const user_hidden = document.querySelector('.user_hidden')
   let cart = JSON.parse(localStorage.getItem('cart'))

   prd_number.forEach((element, index) => {
      cart[index].quatity =  Number(element.innerText)
  })
  localStorage.setItem('cart' , JSON.stringify(cart))

 
  window.location.href = "../bill/setCookie.php"
})

// Nút xóa sản phầm 
xmark.forEach((item , index) =>{
  item.addEventListener('click', ()=>{
    window.location.href = "./setCookie.php?act=deleteItem&id="+index;
  })
})