//  chuyển hướng đến trang detail 
function navigateToDetail(id){
    window.location.href = "../detailPage/index.php?act=navigateToDetail&id="+id;
   
}

function getCart(){
    window.location.href = "../cart/cart.php";
}

function goToRegister(){
    window.location.href = 'index.php?act=goToRegister'
}
function goToRegisterFormDetail(){
    window.location.href = '../indexPage/index.php?act=goToRegister'
}
function goToHome(){
    window.location.href = 'index.php'
}

function goToHomeFromDetail(){
    window.location.href = "../indexPage/index.php"
}