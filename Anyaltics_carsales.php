<!-- dashboard.html -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Include Chart.js library -->
    <title>Admin Dashboard</title>
    <style>
    /* dashboard.css */

    /* Your existing styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .chart-container {
        background-color: #fff;
        padding: 5px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-top: 1px;
        max-width: 600px;
        /* Limit the width of the chart container */
        margin-left: 200px;
    }

    .totals-container {
        display: grid;
        justify-content: space-between;
        margin-top: 20px;
    }

    .total-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        flex: 1;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f2f2f2;
    }
    a:hover{
        color: red;
    }

    </style>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="main_content">
        <div class="info">
            <div class="content">
                <div class="statistics">
                    <!-- Your existing statistic cards -->
                </div>

                <div class="chart-container">
                    <canvas id="myChart" width="200" height="100"></canvas> <!-- Adjust width and height here -->
                </div>
            </div>
            <h1>Top 5 Best-Selling Cars</h1>
            <table>
                <tr>
                    <th>Rank</th>
                    
                    <th>Car Model</th>
                    <th>Price</th>
                    <th>Number of Sales</th>
                    <th>View Details </th>
                </tr>
                <tr>
                    <td>1</td>
                    
                    <td>Hyundai Aura</td>
                    <td>7,00,000</td>
                    <td>25</td>
                    <td><a href = "#">View Details</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    
                    <td>TATA Harrier</td>
                    <td>14,60,000</td>
                    <td>22</td>
                    <td><a href = "#">View Details</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    
                    <td>Honda Amaze</td>
                    <td>7,20,000</td>
                    <td>19</td>
                    <td><a href = "#">View Details</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    
                    <td>Skoda Slavia</td>
                    <td>11,50,000</td>
                    <td>15</td>
                    <td><a href = "#">View Details</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    
                    <td>Audi Q5</td>
                    <td>65,18,000</td>
                    <td>9</td>
                   <td> <a href = "#">View Details</a></td>
                </tr>
            </table>
        </div>
    </div>

    <script>
    // dashboard.js

    // Sample data for the chart
    //         function generateRandomData() {
    //     const data = [];
    //     for (let i = 0; i < 12; i++) { // Assuming you have 7 data points for each month
    //         data.push(Math.floor(Math.random() * 100)); // Generate a random number between 0 and 100
    //     }
    //     return data;
    // }
    const chartData = {
        labels: ['March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
            'January', 'February',
        ],
        datasets: [{
            label: 'Month Car Sales Report 2023-2024',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            data: [25, 29, 35, 36, 26, 31, 36, 25, 22, 40, 20, 36, 32]
        }]
    };

    // Create a chart using Chart.js
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: chartData,
    });

    // You can add more logic for fetching and displaying data as needed.
    </script>
</body>

</html>
