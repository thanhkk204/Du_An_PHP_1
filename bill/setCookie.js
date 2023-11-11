const products = localStorage.getItem("cart")
    document.cookie = `carts=${products}; expires=${new Date("2024-01-01 00:00:00").toUTCString()}`
    
    window.location.href = "./bill.php";