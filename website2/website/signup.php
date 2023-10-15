<!DOCTYPE html>
<html>

<head>
  <title>signup</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    #login-box {
      width: 400px;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      margin: 100px auto;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 90%;
      padding: 10px;
      margin-bottom: 20px;
      border: solid 0.2px;
      border-radius: 3px;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      margin-top: 10px;
      font-size: 20px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      padding: 10px;
      cursor: pointer;
      font-size: 20px;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }

    label {
      font-size: 20px;
    }
  </style>
</head>

<body>
  <div id="login-box">
    <h2>Đăng ký</h2>
    <form method="post" action="">
      <label for="username">Tên đăng nhập:</label><br />
      <input type="text" id="username" name="username" /><br />
      <label for="password">Mật khẩu:</label><br />
      <input type="password" id="password" name="password" /><br />
      <label for="email">Email:</label><br />
      <input type="text" id="email" name="email" /><br />
      <input type="submit" value="Đăng ký" />
    </form>
  </div>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sach";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
  die('Kết nối không thành công: ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  $check_existing_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
  $result = mysqli_query($conn, $check_existing_sql);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $error = "Tên đăng nhập hoặc email đã tồn tại!";
    echo "<script>alert('$error');</script>";
  } else {
    
    $insert_user_sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    $insert_result = mysqli_query($conn, $insert_user_sql);
    if ($insert_result) {
      $message = "Đăng ký thành công!";
      echo "<script>alert('$message');</script>";
      echo "<script>setTimeout(\"location.href = 'signin.php';\",500);</script>";
    } else {
      $error = "Lỗi khi thêm người dùng!";
      echo "<script>alert('$error');</script>";
    }
  }
}
?>
</body>
</html>
