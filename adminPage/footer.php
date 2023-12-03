
</div>
</div>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 <script type="text/javascript">

  let getDatabase = document.getElementById('getDatabase').innerHTML
    let doanhSo = JSON.parse(getDatabase)
    
    arr = []
    doanhSo.map((item , index)=>{
       let obj = {year:item.date , value:item.doanhSo}
       arr.push(obj);
    })
    console.log(arr);
  new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  
  // data: [
  //   { month: '2007', value: 50 },
  // ],
  data: arr,
  
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Doanh số']
});
 </script>
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