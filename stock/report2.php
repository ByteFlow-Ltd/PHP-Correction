<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="2">
<tr>
               <th>Stockin_Id</th>
				<th>Date</th>
				<th>Quantity</th>
				<th>Unit_Price</th>
				<th>Total_Price</th>
</tr>
<?php
	$connect=mysqli_connect("localhost","root","","stock_management");
        $start="01-06-2024";
        $end="31-06-2024";
        $select=mysqli_query($connect,"SELECT * FROM  Stock_in WHERE Date BETWEEN '$start' AND '$end' ");
        while($row=mysqli_fetch_array($select)){
            ?>
            <tr>
            <td><?php echo $ro['Stockin_Id']?></td>
			<td><?php echo $ro['Date']?></td>
			<td><?php echo $ro['Quantity']?></td>
			<td><?php echo $ro['Unit_Price']?></td>
			<td><?php echo $ro['Total_Price']?></td>  
            </tr>
            <?php
        }
?>
</table>    
</body>
</html>