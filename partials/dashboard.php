<?php
$cars = array
    (
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

?>
<?php

function displayTable($array) {
    for ($row = 0; $row < count($array); $row++) {
        echo '<tr>';
        for ($column = 0; $column < count($array[$row]); $column++) {
            echo "<td>" . $array[$row][$column] . "</td>";
        }
        echo '</tr>';
    }
}
?>

<table class="table">
    <tr>
        <th>Make</th>
        <th>Stock</th>
        <th>Sold</th>   
    </tr>
<?php displayTable($cars) ?>

</table>