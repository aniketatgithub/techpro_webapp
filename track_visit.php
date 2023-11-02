<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPro Solutions Product Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">TechPro Solutions</div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="products.php">Products/Services</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>


<?php

// Define an associative array to map product IDs to product names
$productNames = [
    0 => 'Enterprise Resource Planning Software',
    1 => 'Cloud Infrastructure Services',
    2 => 'Cybersecurity Solutions',
    3 => 'Data Analytics Platform',
    4 => 'IoT Solutions',
    5 => 'Custom Software Development',
    6 => 'Blockchain Platform',
    7 => 'AI & Machine Learning',
    8 => 'Virtual Reality Solutions',
    9 => 'IT Consultancy Services',
];

// Function to sort the products based on the number of visits
function sortProductsByVisits($a, $b) {
    return $b['visits'] - $a['visits'];
}

if (isset($_GET['show_last_visited'])) {
    // Check if the 'lastVisited' cookie is set
    if (isset($_COOKIE['lastVisited'])) {
        $lastVisited = json_decode($_COOKIE['lastVisited'], true);
        if (is_array($lastVisited)) {
            echo "Last Five Visited Products: ";
            $lastVisitedNames = array_map(function($productId) use ($productNames) {
                return $productNames[$productId];
            }, $lastVisited);
            echo implode(', ', $lastVisitedNames);
        } else {
            echo "No products have been visited recently.";
        }
    } else {
        echo "No products have been visited recently.";
    }
} elseif (isset($_GET['show_most_visited'])) {
    // Check if the 'mostVisited' cookie is set
    if (isset($_COOKIE['mostVisited'])) {
        $mostVisited = json_decode($_COOKIE['mostVisited'], true);
        if (is_array($mostVisited)) {
            // Change array structure for sorting
            $mostVisitedWithNames = array_map(function($visits, $productId) use ($productNames) {
                return ['name' => $productNames[$productId], 'visits' => $visits];
            }, $mostVisited, array_keys($mostVisited));

            uasort($mostVisitedWithNames, 'sortProductsByVisits');
            $topVisited = array_slice($mostVisitedWithNames, 0, 5);

            echo "Most Visited Products: ";
            foreach ($topVisited as $product) {
                echo $product['name'] . " (Visited " . $product['visits'] . " times), ";
            }
        } else {
            echo "No products have been visited frequently.";
        }
    } else {
        echo "No products have been visited frequently.";
    }
}

?>
</body>
</html>