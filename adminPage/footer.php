
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
</script>
</html>