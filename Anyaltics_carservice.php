<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Service Pie Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        padding-right: 30%;
        

    }

    .main-content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
        width: auto;
        
    }

    .chart-container {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 600px;
       
    }

    canvas {
        max-width: 100%;
        height: auto;
        

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

    a:hover {
        color: red;
    }

    </style>
</head>

<body>
    <?php include 'nav.php' ?>
    <div class="main_content">
        <div class="info">
            <div class="main-content">
                <div class="chart-container">
                    <h3>Top 6 Car Service </h3>
                    <canvas id="myChart"></canvas>
                </div>
            </div>

            <h1>Top 6 Best of Car Service</h1>
            <table>
                <tr>
                    <th>Rank</th>
                   
                    <th>Service Name</th>
                    <th>Price</th>
                    <th>Number of Customer Use</th>
                    <th>View Details </th>
                </tr>
                <tr>
                    <td>1</td>
                    
                    <td>Insure Accident</td>
                    <td>599</td>
                    <td>36</td>
                    <td><a href="#">View Details</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    
                    <td>Wheel-Lift Tow(20 KMs)</td>
                    <td>950</td>
                    <td>35</td>
                    <td><a href="#">View Details</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    
                    <td>Road Trip Inspection</td>
                    <td>1500</td>
                    <td>35</td>
                    <td><a href="#">View Details</a></td>
                </tr>
                <tr>
                    <td>4</td>
                   
                    <td>Standard Service</td>
                    <td>4699</td>
                    <td>29</td>
                    <td><a href="#">View Details</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    
                    <td>Second hand Car Inspection</td>
                    <td>1000</td>
                    <td>26</td>
                    <td> <a href="#">View Details</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    
                    <td>360° Deep Cleaning</td>
                    <td>2499</td>
                    <td>25</td>
                    <td> <a href="#">View Details</a></td>
                </tr>
            </table>

            <script>
            const chartData = {
                labels: ['360° Deep Cleaning', 'Standard Service', 'Wheel-Lift Tow(20 KMs)', 'Insure Accident',
                    'Second hand Car Inspection', 'Road Trip Inspection'
                ],
                datasets: [{
                    label: 'Total Customer Use of This Service',
                    backgroundColor: ['#ffc107', '#28a745', '#e83e8c', '#6610f2', '#dc3545',
                    '#17a2b8'], // Adjust colors here
                    borderColor: '#fff',
                    data: [25, 29, 35, 36, 26, 35]
                }]
            };

            // Create a chart using Chart.js
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'pie',
                data: chartData,
                options: {
                    plugins: {
                        legend: {
                            position: 'bottom',
                        },
                    },
                },
            });
            </script>
        </div>
    </div>
</body>

</html>
