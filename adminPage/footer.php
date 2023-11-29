
</div>
</div>
  </body>
  <script>
  const input = document.querySelector("input[type='file']");

  input.addEventListener("change", () => {
    const files = input.files;

    if (files.length > 3) {
      // Ngăn người dùng chọn thêm ảnh
      input.disabled = true;
      alert("Bạn chỉ được chọn tối đa 3 ảnh!");
    }
  });

          function confirmDeleteDetal(id){
            let confirmDelate;
            confirmDelate = confirm('Bạn có muốn xóa sản phẩm này không')

            if(confirmDelate){
              window.location.href = "index.php?act=xoaChiTietSanPham&id="+id
            }
          }
          function confirmDelete(id){
            let confirmDelate;
            confirmDelate = confirm('Bạn có muốn xóa sản phẩm này không')

            if(confirmDelate){
              window.location.href = "index.php?act=xoaSanPham&id="+id
            }
          }
          function huyDonHanghuyDonHangAdmin(id){
            let confirmDelate;
            confirmDelate = confirm('Bạn có muốn hủy đơn hàng này không')

            if(confirmDelate){
              window.location.href = "index.php?act=xoaNhanDonHang&id="+id
            }
          }
          function xoaComment(id){
            let confirmDelate;
            confirmDelate = confirm('Bạn có muốn xóa bình luận này không này không')

            if(confirmDelate){
              window.location.href = "index.php?act=xoaComment&id="+id
            }
          }
          function xoaNguoiDung(id){
            let confirmDelate;
            confirmDelate = confirm('Bạn có muốn xóa bình luận này không này không')

            if(confirmDelate){
              window.location.href = "index.php?act=xoaNguoiDung&id="+id
            }
          }
          
</script>
</html>