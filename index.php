<?php 
  $drinks = [
  "Latte" => 3.99,
  "Coffee" => 2.00,
  "Tea" => 2.50,
  "Mocha" => 4.50
  ];

  $pastries = [
  "Croissant",
  "Muffin",
  "Slice of Pie",
  "Slice of Cake",
  "Cupcake",
  "Brownie"
  ];
?>

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  
  <body>
    
    <h1>Welcome to the Repetitive Cafe</h1>
    <h3>Drinks!</h3>
      <ul>
        <?php foreach($drinks as $drink => $price): ?>
          <li><?= "$drink: £$price" ?></li>
        <?php endforeach; ?>
      </ul>
    
    <h3>Pastries! ($2 each)</h3>
      <ul>

      </ul>
  
  </body>
</html>