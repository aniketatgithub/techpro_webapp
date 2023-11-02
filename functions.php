<?php
// functions.php

function trackProductVisit($productIndex) {
    // Functionality to track product visit
    $visits = isset($_COOKIE['visits']) ? json_decode($_COOKIE['visits'], true) : array_fill(0, 10, 0);
    $visits[$productIndex]++;
    setcookie('visits', json_encode($visits), time() + 86400 * 30); // Set for 30 days
}

function showMostVisitedProducts() {
    // Functionality to display most visited products
    $visits = isset($_COOKIE['visits']) ? json_decode($_COOKIE['visits'], true) : [];
    arsort($visits);
    $mostVisited = array_slice($visits, 0, 5, true);
    foreach ($mostVisited as $index => $visitCount) {
        if ($visitCount > 0) {
            echo "Product " . ($index + 1) . " has been visited " . $visitCount . " times<br>";
        }
    }
}

// No need for other code in this file, it should only define functions
