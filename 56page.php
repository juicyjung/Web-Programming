<table border=1 cellpadding=2>
<tr><th>Row number</th><th>Name1</th>
<th>Name2</th><th>Name3</th></tr>
<?php
$families = array(
	"Griffin" => array("Peter", "Lois", "Megan"),
	"Quagmire" => array("Glenn"),
	"Brown" => array("Cleveland", "Loretta", "Junior")
);
for ($row = 0; $row < 3; $row++) {
{
	echo "<tr><td>$row</td>";
	echo "<td>".$families["Griffin"][$row]. "</td>";
	echo "<td>".$families["Quagmire"][$row]. "</td>";
	echo "<td>".$families["Brown"][$row]. "</td>";
}
echo "</tr>";
}
?>