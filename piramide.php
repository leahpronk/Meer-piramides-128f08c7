<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Piramide</title>
<style>
td {
height: 71px;
width: 71px;
background-color: black;
}
</style>
</head>
<body>
<table cellspacing="0" cellpadding="0">
<tbody>
<?php
for ($i=1; $i <= 10; $i++) {
echo("<tr>");
for ($j=1; $j < $i; $j++) {
echo("<td></td>");
}
echo("<tr>");
}
?>
</tbody>
</table>
</body>
</html>