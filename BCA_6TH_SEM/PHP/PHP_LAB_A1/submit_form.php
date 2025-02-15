<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent XSS
    $name = htmlspecialchars(strip_tags($_POST["name"]));
    $email = htmlspecialchars(strip_tags($_POST["email"]));
    $message = htmlspecialchars(strip_tags($_POST["message"]));

    // Basic email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email format.</p>";
        exit;
    }

    echo "<h2>Form Submission Result</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "<p>Access denied.</p>";
}
?>
