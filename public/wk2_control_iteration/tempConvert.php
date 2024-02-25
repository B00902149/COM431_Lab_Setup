<!--
   **********************************************
   *	Created By Adrian Dallas				*
   *	Last Modified 14/02/2024 @ 09:29am	    *
   **********************************************
-->
<!DOCTYPE html>
<html lang="en">
      <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="description" content="Temp Converter">
         <meta name="author" content="Peter Nicholl">
         
         <title>Temperature Converter</title>

        <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        </style>

      </head>
      <body>

        <h1>Temperature Converter</h1>
<table class="styled-table">
    <thead>
        <th>celsius</th>
        <th>Kelvin</th>
        <th>Fahrenheit</th>
    </thead>
    <tbody>
<?php
    for ($celsius = -10; $celsius <=110; $celsius +=5){
        $fahrenheit = ($celsius * 9/5) + 32;
        $kelvin = $celsius + 273.15;
        echo "<tr>
        <td>$celsius</td>
        <td>$kelvin</td>
        <td>$fahrenheit</td>";
}
?>
    </tbody>
</table>
</body>
</html>