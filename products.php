<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Products/Services - TechPro Solutions</title>
    <script src="scripts.js"></script>
</head>
<body>
    <header>
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
    </header>
<!-- Add links to the new product pages -->
<section id="products">
    <h1>Our Products and Services</h1>
    <div id="product-list">
    <article>
    <h2><a href="product1.html" onclick="trackVisit(0); return true;">Enterprise Resource Planning Software</a></h2>
    <p>Streamline your business processes with our integrated ERP software designed for scalability and efficiency.</p>
</article>
<article>
    <h2><a href="product2.html" onclick="trackVisit(1); return true;">Cloud Infrastructure Services</a></h2>
    <p>Expand your business's capabilities with our secure and robust cloud infrastructure services.</p>
</article>
<article>
    <h2><a href="product3.html" onclick="trackVisit(2); return true;">Cybersecurity Solutions</a></h2>
    <p>Protect your digital assets with our advanced cybersecurity solutions tailored to your business's needs.</p>
</article>
<article>
    <h2><a href="product4.html" onclick="trackVisit(3); return true;">Data Analytics Platform</a></h2>
    <p>Make informed decisions with our comprehensive data analytics platform that turns data into actionable insights.</p>
</article>
<article>
    <h2><a href="product5.html" onclick="trackVisit(4); return true;">IoT Solutions</a></h2>
    <p>Connect and manage your devices seamlessly with our Internet of Things solutions.</p>
</article>
<article>
    <h2><a href="product6.html" onclick="trackVisit(5); return true;">Custom Software Development</a></h2>
    <p>Get tailored software solutions designed specifically for your business's unique challenges.</p>
</article>
<article>
    <h2><a href="product7.html" onclick="trackVisit(6); return true;">Blockchain Platform</a></h2>
    <p>Leverage our blockchain platforms for enhanced security and transparency in your operations.</p>
</article>
<article>
    <h2><a href="product8.html" onclick="trackVisit(7); return true;">AI & Machine Learning</a></h2>
    <p>Transform your business with our AI and machine learning services that drive innovation and efficiency.</p>
</article>
<article>
    <h2><a href="product9.html" onclick="trackVisit(8); return true;">Virtual Reality Solutions</a></h2>
    <p>Immerse your customers in a virtual environment with our cutting-edge VR solutions.</p>
</article>
<article>
    <h2><a href="product10.html" onclick="trackVisit(9); return true;">IT Consultancy Services</a></h2>
    <p>Enhance your IT strategy with our expert consultancy services, guiding you towards technological success.</p>
</article>
        <!-- Repeat for each product -->
    </div>
    <a href="track_visit.php?show_last_visited=true">Last Five Visited Products</a>
<a href="track_visit.php?show_most_visited=true">Show Most Visited Products</a>
</section>
    <footer>
        &copy; TechPro Solutions 2023
    </footer>
</body>
</html>

