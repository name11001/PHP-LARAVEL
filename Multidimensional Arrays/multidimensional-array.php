<?php
$cars = [
    ["Volvo",22,18],
    ["BMW",15,13],
    ["Saab",5,2],
    ["Land Rover",17,15]
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;

        }
    </style>
</head>
<body>
    <table border="1px" width="100%">
        <tr>
            <th>Brand</th>
            <th>Stock</t>
            <th>Sold </th>
        </tr>
<?php 
foreach ($cars as $key => $value) {
    ?>
    <tr>
        <?php 
        foreach ($value as $keys => $values) {
            ?>
            <td><?php echo $values;?></td>
            <?php
            }
}          
        ?>
           </tr>

  
</table>
</body>
</html>

