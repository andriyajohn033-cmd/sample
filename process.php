<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form values
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Display the data
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
}
?>
