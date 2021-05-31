<table border=1 cellpadding=2>
<tr><th>Row number</th><th>Brand</th>
<th>Stock</th><th>Sold</th></tr>
<?php
$cars = array (
	array("Volvo", 22, 18),
	array("BMW", 15, 13),
	array("Toyota", 5, 2),
	array("Hyundai", 17, 15)
);

for ($row = 0; $row < 4; $row++) {
	echo "<tr><td>$row</td>";
	
	for ($col = 0; $col < 3; $col++) {
		echo "<td>".$cars[$row][$col]."</td>";
	}
	echo "</tr>";
}
?>
</table>