<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Team | Car Sales and Service</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
h1{
    color:white;
}
     h2, h3 {
        margin: 0;
        color: #333;
    }

    p {
        margin: 0;
        color: #666;
    }

    /* Header Styles */
    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }

    /* Employee Styles */
    .employee-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }

    .employee {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        width: 250px;
        transition: transform 0.3s ease;
    }

    .employee:hover {
        transform: translateY(-10px);
    }

    .employee img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        margin-bottom: 20px;
        border: 5px solid #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Footer Styles */
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        margin-top: 20px;
    }
</style>
<body>
    <?php include 'nav.php' ?>
    <header>
        <h1>Meet Our Team</h1>
    </header>

    <div class="container">
        <section class="employee-container">
            <div class="employee">
                <img src="images.jfif" alt="Employee 1">
                <h2>John Doe</h2>
                <p>Sales Manager</p>
            </div>
            <div class="employee">
                <img src="images (1).jfif" alt="Employee 2">
                <h2>Jane Smith</h2>
                <p>Service Technician</p>
            </div>
            <!-- Add more employee entries as needed -->
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Car Sales and Service</p>
    </footer>
</body>
</html>
