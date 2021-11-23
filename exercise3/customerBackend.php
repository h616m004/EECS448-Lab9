<?php
	echo '<style>'; 
		include "style.css"; 
	echo '</style>';
	//$css = file_get_contents("style.css");
	$title = $css.p.title;
	$username = $_POST["username"];
	$password = $_POST["password"];
	$bcraw = $_POST["bcraw"];
	$ramsey = $_POST["ramsey"];
	$kobe = $_POST["kobe"];
	$shipping = $_POST["option"];
	$bcrawPrice = $bcraw*35;
	$ramseyPrice = $ramsey*50;
	$kobePrice = $kobe*24;
	if($shipping == "Free 7 day")
	{
		$shippingPrice = 0;
	}	
	else if($shipping == "$50.00 over night")
	{
		$shippingPrice = 50;
	}
	else if($shipping == "$5.00 three day")
	{
		$shippingPrice = 5;
	}
	$totalPrice = $bcrawPrice+$kobePrice+$ramseyPrice+$shippingPrice;
	echo "<body class='green'>";
	echo "<p class='title'>Welcome! Your password is $password</p>";
	echo "<table>";
		echo "<tr>";
			echo "<th></th>";
			echo "<th>Quantity</th>";
			echo "<th>Cost Per Item</th>";
			echo "<th>Sub Total</th>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Brandon Crawford SF Giants Jersey</th>";
			echo "<td>$bcraw</td>";
			echo "<td>$35</td>";
			echo "<td>$$bcrawPrice</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Jalen Ramsey LA Rams Jersey</th>";
			echo "<td>$ramsey</td>";
			echo "<td>$50</td>";
			echo "<td>$$ramseyPrice</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Kobe Bryant LA Lakers Jersey</th>";
			echo "<td>$kobe</td>";
			echo "<td>$24</td>";
			echo "<td>$$kobePrice</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Shipping</th>";
			echo "<td colspan='2'>$shipping</td>";
			echo "<td>$$shippingPrice</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<th colspan='3'>Total Cost</th>";
			echo "<td>$$totalPrice</td>";
		echo "</tr>";
	echo "</table>";
	echo "</body>";
?>
