<?php
// Assume you have an array of financing options, each represented as an associative array
$financingOptions = [
    ['term' => '12 months', 'interest_rate' => '2.5%', 'monthly_payment' => '1,200'],
    ['term' => '24 months', 'interest_rate' => '3.0%', 'monthly_payment' => '800'],
    ['term' => '36 months', 'interest_rate' => '3.5%', 'monthly_payment' => '600'],
    // Add more financing options as needed
];
?>

<h3>1.2 Financing Options</h3>

<p>Learn about our flexible financing plans and get information on interest rates, loan terms, and the application process.</p>

<table>
    <tr>
        <th>Term</th>
        <th>Interest Rate</th>
        <th>Monthly Payment</th>
    </tr>

    <!-- Loop through the financing options array and display each option's information in a table -->
    <?php foreach ($financingOptions as $option): ?>
        <tr>
            <td><?php echo $option['term']; ?></td>
            <td><?php echo $option['interest_rate']; ?></td>
            <td><?php echo $option['monthly_payment']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
