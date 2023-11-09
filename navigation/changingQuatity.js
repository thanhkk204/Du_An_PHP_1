let getDatabase = document.getElementById('getDatabase').innerHTML
    let data = JSON.parse(getDatabase)
    sessionStorage.setItem('productDetail' , JSON.stringify(data))