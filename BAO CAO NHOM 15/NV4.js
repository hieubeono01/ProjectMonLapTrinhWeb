document
.getElementById("myForm")
.addEventListener("submit", function(event) {
  event.preventDefault(); // Ngăn chặn gửi dữ liệu mặc định
  

  var name = document.getElementById("name").value;
  var gender = document.getElementById("gender").value;

  // Kiểm tra dữ liệu hợp lệ
  if (name === "") {
    alert("Vui lòng nhập họ và tên!");
    return;
  } else {
    alert("Lưu thành công!");
  }
  // Reset form
  document.getElementById("myForm").reset();
});
