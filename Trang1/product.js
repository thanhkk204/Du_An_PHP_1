let product = document.querySelectorAll(".product")
let watch_shoe = document.querySelectorAll(".product .watch_shoe")
let i_heart = document.querySelectorAll(".product>i")

product.forEach((item, index) => {
  item.addEventListener("mouseover", (e) => {
    watch_shoe[index].classList.add("show")
  })
})

product.forEach((item, index) => {
  item.addEventListener("mouseover", (e) => {
    watch_shoe[index].classList.add("show")
  })

  item.addEventListener("mouseout", (e) => {
    watch_shoe[index].classList.remove("show")
  })
})

watch_shoe.forEach((item) => {
  item.addEventListener("click", (e) => {
    alert("Bạn đã thêm sản phẩm vào giỏ hàng")
  })
})

i_heart.forEach((item) => {
  item.addEventListener("click", () => {
    item.classList.toggle("favourite")
    console.log("item")
  })
})

// watch_all

let watch_all = document.querySelectorAll(".watch_all")
let watch_all_span = document.querySelectorAll(" .watch_all > span")
let watch_all_i = document.querySelectorAll(".watch_all > i")

watch_all.forEach((item, index) => {
  item.addEventListener("mouseover", (e) => {
    watch_all_span[index].classList.add("hide")
    item.style.backgroundColor = "var(--text_color)"
    watch_all_i[index].style.color = "var( --background_color)"
    watch_all_i[index].classList.add("watch_all_animation")
  })
})

watch_all.forEach((item, index) => {
  item.addEventListener("mouseout", (e) => {
    watch_all_span[index].classList.remove("hide")
    item.style.backgroundColor = "var(--background_color)"
    watch_all_i[index].style.color = "var( --text_color)"
    watch_all_i[index].classList.remove("watch_all_animation")
  })
})

// Phần hover sản phẩm
const product_container = document.querySelectorAll(".product_container")

product_container.forEach((item, index) => {
  const product_checkInto = document.createElement("div")
  product_checkInto.className = "product_checkInto"
  product_checkInto.innerText = "Xem Ngay"
  item.addEventListener("mouseover", () => {
    item.classList.add('box-shadow_product')
    const children = item.querySelectorAll("*")
    const product_image = children[2]
    const img = children[3]
    img.src = children[1].src
    product_image.appendChild(product_checkInto)
  })
})

product_container.forEach((item, index) => {
  item.addEventListener("mouseout", () => {
    item.classList.remove('box-shadow_product')
    const children = item.querySelectorAll("*")
    const product_image = children[2]
    const img = children[3]
    const product_checkInto = children[4]
    img.src =
    children[0].src

    product_image.removeChild(product_checkInto)
  })
})
