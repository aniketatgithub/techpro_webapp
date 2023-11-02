<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data and store it in your text file or database
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Save the contact information to a text file (contacts.txt)
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents("contacts.txt", $data, FILE_APPEND);
    

    // Redirect to the thank_you.html page
    header('Location: thank_you.html');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
