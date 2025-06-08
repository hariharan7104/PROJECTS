<?php
$conn = new mysqli("localhost", "root", "", "project");
$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

if ($result->num_rows > 0) {
    echo "<script>alert('Logged in successfully'); window.location.href = '../html/access.html';</script>";
} else {
    echo "<script>alert('Invalid username or password'); window.location.href = '../html/login.html';</script>";
}
?>
