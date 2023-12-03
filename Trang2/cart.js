const goToCart = document.querySelector(".show_product_right_buy_cart")
const getQuatity = document.querySelector(".prd_number")
goToCart.addEventListener("click", () => {
  const product = JSON.parse(sessionStorage.getItem("productDetail"))
  if (product.length > 1 || Array.isArray(product)) {
    alert("Bạn chưa chọn màu sắc hoặc số lượng")
  } else {
    const checkCart = JSON.parse(localStorage.getItem("cart")) 
    product.quatity = getQuatity.innerHTML
    if (!checkCart) {
      let arr = []
      arr.push(product)

      localStorage.setItem("cart", JSON.stringify(arr))
    } else {
      const checkExist = checkCart.find((item) => {
        return item.color == product.color && item.size == product.size && item.id_sanPham == product.id_sanPham
      })

      if (checkExist) {
        const newCart = checkCart.map((item) => {
          if (item.color == product.color && item.size == product.size && item.id_sanPham == product.id_sanPham) {
            let getQuatity = parseInt(item.quatity)
            item.quatity = getQuatity + parseInt(product.quatity)
            return item
          } else {
            return item
          }
        })
        localStorage.setItem("cart", JSON.stringify(newCart))

        
      } else {
        checkCart.push(product)
        localStorage.setItem("cart", JSON.stringify(checkCart))

      
      }
    }

    var conFirm = confirm(
      "Bạn đã thêm thành công , Bạn có muốn di chuyển đến giỏ hàng không"
    )
    location.reload()
    if (conFirm) {
      window.location.href = "../cart/setCookie.php?act=setCart"
    }
  }
})
