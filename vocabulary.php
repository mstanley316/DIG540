<style>
table {background-color:#eeeee; border-radius:10px: margin:40px auto 40px auto 40pz auto; width:800px; border:solid 1px #aaaaa:}
th {background-color:99eeee; text-align:left: padding:10px;}
td {vertical-align:top; padding:10px; border:solid 1px #fffff;}

    </style>


<?php

$content = file_get_contents("https://raw.githubusercontent.com/mstanley316/DIG540/main/02/vocabulary.json");
$content = json_decode($content);

echo "<table>";
echo "<tr><th>Term</th><th>Wikipedia definition</th></tr>";
foreach ($content as $row) {
    echo "<tr>";
    echo "<td>";
    echo $row->name;
    echo "</td>";
    echo "<td>";
    echo $row->definition;
    echo "</td>";
    echo "</tr>";
}
echo"</table>";

?>