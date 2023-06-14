+<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    // Mã hóa mật khẩu bằng thuật toán băm, ví dụ: bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
}
?>