let decline = document.querySelector(
  ".show_product_right_buy .show_product_right_buy_btn .decline"
)
let prd_number = document.querySelector(
  ".show_product_right_buy .show_product_right_buy_btn .prd_number"
)
let increase = document.querySelector(
  ".show_product_right_buy .show_product_right_buy_btn .increase"
)
let quatityOfProduct = document.getElementById("quatityOfProduct")
let sizeProduct = document.querySelector(".show_product_right_size")
let colorProduct = document.querySelector(".show_product_right_color")
let getColorElements = document.getElementsByClassName("getColorElement")
let getSizeElements = document.getElementsByClassName("getSizeElement")

//  Sử lí tăng giảm số lượng sản phẩm
let so_luong_sanPham = Number(prd_number.innerText)
decline.addEventListener("click", (e) => {
  if (so_luong_sanPham > 1) {
    so_luong_sanPham--
    prd_number.innerText = so_luong_sanPham
  }
})

increase.addEventListener("click", (e) => {
  if (so_luong_sanPham < quatityOfProduct.innerHTML) {
    so_luong_sanPham++
    prd_number.innerText = so_luong_sanPham
  }
})

// Sử lí Chọn màu và size
// Size

for (let i = 0; i < getSizeElements.length; i++) {
  getSizeElements[i].addEventListener("click", () => {
    let sizeHtml = getSizeElements[i].innerText
    let newQuatity = 0
    let data = JSON.parse(sessionStorage.getItem("productDetail"))
    let result = data.filter((item) => {
      return item.size == sizeHtml
    })
    // set lại sesstion
    sessionStorage.setItem("productDetail", JSON.stringify(result))
    // Tạo thẻ p chứa màu duy nhất
    const SizeDom = document.createElement("p")
    SizeDom.innerHTML = result[0].size
    SizeDom.addEventListener("dblclick", () => {
      location.reload()
    })
    sizeProduct.replaceChildren(SizeDom)
    // Sử dụng hàm set để lọc các giá trị  không lặp
    const size = new Set(result.map((item) => item.color))
    colorProduct.innerHTML = ""
    size.forEach((element) => {
      // Tạo từng cái p chứa color
      const ColorDom = document.createElement("p")
      ColorDom.innerHTML = element
      // Gắn cho từng cái thẻ P chứa color sự kiện
      ColorDom.addEventListener("click", () => {
        const lastChoice = result.find((item) => item.color == ColorDom.innerHTML)
        // set lại sesstion
        sessionStorage.setItem("productDetail", JSON.stringify(lastChoice))

        // Thay đổi số lượng khi tìm ra loại cuối
        quatityOfProduct.innerHTML = lastChoice.total
        prd_number.innerText = 1
        so_luong_sanPham = 1

        // Lấy cái color cuối cùng
        colorProduct.innerHTML = ""
        let newColor = document.createElement("p")
        newColor.innerHTML = ColorDom.innerHTML
        colorProduct.replaceChildren(newColor)
        // Gắn sự kiện db click để reload
        newColor.addEventListener('dblclick' , ()=>{
          location.reload()
        })
      })

      
      colorProduct.appendChild(ColorDom)
    })


    // Tổng số lượng đang có
    result.map((item) => {
      newQuatity += parseInt(item.total)
    })

    quatityOfProduct.innerHTML = newQuatity
    prd_number.innerText = 1
    so_luong_sanPham = 1
  })
}

//  color
for (let i = 0; i < getColorElements.length; i++) {
  getColorElements[i].addEventListener("click", () => {
    let colorHtml = getColorElements[i].innerText
    let newQuatity = 0
    let data = JSON.parse(sessionStorage.getItem("productDetail"))
    let result = data.filter((item) => {
      return item.color == colorHtml
    })
    // set lại sesstion
    sessionStorage.setItem("productDetail", JSON.stringify(result))
    // Tạo thẻ p chứa màu duy nhất
    const ColorDom = document.createElement("p")
    ColorDom.innerHTML = result[0].color
    ColorDom.addEventListener("dblclick", () => {
      location.reload()
    })
    colorProduct.replaceChildren(ColorDom)
    // Sử dụng hàm set để lọc các giá trị  không lặp
    const color = new Set(result.map((item) => item.size))
    sizeProduct.innerHTML = ""
    color.forEach((element) => {
      // Tạo từng cái p chứa size
      const SizeDom = document.createElement("p")
      SizeDom.innerHTML = element
      // Gắn cho từng cái thẻ P chứa size sự kiện
      SizeDom.addEventListener("click", () => {
        const lastChoice = result.find((item) => item.size == SizeDom.innerHTML)
        // set lại sesstion
        sessionStorage.setItem("productDetail", JSON.stringify(lastChoice))

        // Thay đổi số lượng khi tìm ra loại cuối
        quatityOfProduct.innerHTML = lastChoice.total
        prd_number.innerText = 1
        so_luong_sanPham = 1

        // Lấy cái size cuối cùng
        sizeProduct.innerHTML = ""
        let newSize = document.createElement("p")
        newSize.innerHTML = SizeDom.innerHTML
        sizeProduct.replaceChildren(newSize)
        // Gắn sự kiện db click để reload
        newSize.addEventListener('dblclick' , ()=>{
          location.reload()
        })
      })

      
      sizeProduct.appendChild(SizeDom)
    })


    // Tổng số lượng đang có
    result.map((item) => {
      newQuatity += parseInt(item.total)
    })

    quatityOfProduct.innerHTML = newQuatity
    prd_number.innerText = 1
    so_luong_sanPham = 1
  })
}
