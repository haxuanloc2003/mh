<?php
// Thông tin kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Dữ liệu đầu vào từ form
$newUsername = $_POST['username'];
$newPassword = $_POST['password'];

// Mã hóa mật khẩu
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// Tạo câu truy vấn để thêm tài khoản mới vào cơ sở dữ liệu
$sql = "INSERT INTO users (username, password) VALUES ('$newUsername', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Tạo tài khoản thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
