<?php
// Read the content of the contacts.txt file
$contacts = file_get_contents("contacts.txt");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Display Contacts</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Information</h1>
    </header>
    <nav>
    <div class="logo">TechPro Solutions</div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="products.php">Products/Services</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav>
    <section>
        <h2>Contacts</h2>
        <pre><?= $contacts ?></pre>
    </section>
    <footer>
        &copy; Your Company 2023
    </footer>
</body>
</html>
