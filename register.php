<?php
$conn = new mysqli("localhost", "root", "", "project");
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

if ($password === $confirm) {
    $check = $conn->query("SELECT * FROM users WHERE username = '$username'");
    if ($check->num_rows > 0) {
        echo "<script>alert('User already registered'); window.location.href = '../html/register.html';</script>";
    } else {
        $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
        echo "<script>alert('Registration successful'); window.location.href = '../html/user.html';</script>";
    }
} else {
    echo "<script>alert('Passwords do not match'); window.location.href = '../html/register.html';</script>";
}
?>
