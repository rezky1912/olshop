<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to Your Dashboard</h1>
        </header>
        <nav>
            <ul>
                <li><a href="#">Products</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Customers</a></li>
            </ul>
        </nav>
        <section id="content">
            <!-- Content will be loaded here dynamically using JavaScript -->
        </section>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
