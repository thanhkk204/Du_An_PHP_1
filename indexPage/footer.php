<div class="footer">
     <div class="footer_media">
      <div>
        <img src="../img/logo.webp" alt="">
      </div>
      <p>CopyRight@ 2023 develeped by Thanh all right resend</p>
      <div class="media">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-tiktok"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-github"></i>
      </div>
    
    </div>

    <div class="quickLinks">
      <h4>Quick Links</h4>
      <div>

        <a href="#">Home</a>
        <a href="#">About us</a>
        <a href="#">Services</a>
        <a href="#">Blog</a>
      </div>
    </div>
    <div class="iWantTo">
    <h4>I Want To</h4>
    <div>
      <a>Find new product</a>
      <a>Request an Appointment</a>
      <a>Find a Location</a>
      <a>Get a Option</a>
    </div>
    </div>
    <div class="support">
    <h4>Support</h4>
    <div>
      <a>Donate</a>
      <a>Contact us</a>

    </div>
    </div>
  
    <script src="../Trang1/dark.js"></script>
    <script src="../Trang1/header.js"></script>
    <script src="../Trang1/product.js"></script>
    <script src="../Trang1/register.js"></script>
    <script src="../navigation/navigate.js"></script>

    <script>
      function huyDonHangClient(id){
            let confirmDelate;
            confirmDelate = confirm('Bạn chắc muốn xóa sản phẩm này , Nếu đơn hàng không có sản phẩm sẽ tự động xóa')

            if(confirmDelate){
              window.location.href = "index.php?act=xoaNhanDonHang&id="+id
            }
          }
      function huyDonHangClientAll(id){
            let confirmDelate;
            confirmDelate = confirm('Bạn có muốn xóa đơn hàng này không')

            if(confirmDelate){
              window.location.href = "index.php?act=xoaNhanDonHangAll&id="+id
            }
          }
      function chiTietDonHang(id){
              window.location.href = "index.php?act=chiTietDonHang&id="+id
          }

      // Pop tìm kiếm tên sản phẩm
      const searchItems = document.querySelector('.searchItems')
      const formSearch = document.querySelector('.searchItems>form')

      searchItems.addEventListener('click' , ()=>{
        formSearch.classList.toggle('show')
      })
      formSearch.addEventListener('click' , (event)=>{
        event.stopPropagation();
      })
    </script>
  </body>
</html>