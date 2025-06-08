<?php
$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    echo "<script>alert('Database connection failed.'); window.history.back();</script>";
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$teacher = $_POST['teacher_name'];
$subject_quality = $_POST['subject_quality'];
$teaching_effectiveness = $_POST['teaching_effectiveness'];
$topics = isset($_POST['topics']) ? implode(", ", $_POST['topics']) : '';
$overall_rating = $_POST['overall_rating'];
$comments = $_POST['comments'];

$sql = "INSERT INTO feedback (name, email, subject, teacher_name, subject_quality, teaching_effectiveness, topics_covered, overall_rating, comments)
VALUES ('$name', '$email', '$subject', '$teacher', '$subject_quality', '$teaching_effectiveness', '$topics', '$overall_rating', '$comments')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../html/welcome.html");
    exit;
} else {
    echo "<script>alert('Error submitting feedback.'); window.history.back();</script>";
}

mysqli_close($conn);
?>
