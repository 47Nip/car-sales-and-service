<!-- Assume you have an array of cars, each represented as an associative array -->
<?php
$cars = [
    ['make' => 'Toyota', 'model' => 'Camry', 'year' => 2022, 'price' => '25,000'],
    ['make' => 'Honda', 'model' => 'Accord', 'year' => 2021, 'price' => '24,500'],
    ['make' => 'Ford', 'model' => 'Escape', 'year' => 2023, 'price' => '27,000'],
    // Add more cars as needed
];
?>

<h3>1.1 Browse Inventory</h3>

<p>Explore our diverse range of new and used cars. Use our advanced search filters to find the perfect match for your preferences.</p>

<table>
    <tr>
        <th>Make</th>
        <th>Model</th>
        <th>Year</th>
        <th>Price</th>
    </tr>

    <!-- Loop through the cars array and display each car's information in a table -->
    <?php foreach ($cars as $car): ?>
        <tr>
            <td><?php echo $car['make']; ?></td>
            <td><?php echo $car['model']; ?></td>
            <td><?php echo $car['year']; ?></td>
            <td><?php echo $car['price']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
