<?php
$colors=array("green","blue","pink","orange","purple","aqua","magenta","yellow","cyan","brown","gold","coral");
$cars = [
    ["Volvo",22,18],
    ["BMW",15,13],
    ["Saab",5,2],
    ["Land Rover",17,15],
    ["Tesla",50,20],
    ["Honda",70,50],
    ["Lamborghini",30,20],
    ["Audi",40,10],
    ["Jeep",10,5],
    ["Toyota",100,60],
    ["Ford",25,8],
    ["Mercedes-Benz",30,10],
    ["Rolls-Royce",5,2],
    ["Bugatti",3,1],
    ["Ferrari",80,40],
    ["Porsche",25,10],
    ["Bentley",8,2],
    ["Maserati",2,1],
    ["Hyundai",30,10],
    ["Nissan",60,47],
    ["Lexus",9,3],

  ];
  echo "<table border='1px' width='100%' border-collapse='collapse'>";
  echo "<tr>
        <th>Brand Name</th>
        <th>Stock In</th>
        <th>Sold Out</th>
        </tr>";
        $i=0;
    foreach ($cars as $value) {
        echo "<tr style='background-color:{$colors[$i%count($colors)]}'>";
        $i++;
        foreach ($value as $values) {
            echo "<td>$values</td>";
            
        }
        echo "</tr>";
}
echo "</table>"


?>
