
<?php
	$host = "localhost";
	$db = "rockfountain";
	$user = "Tim";
	$pwd = "2@HowdyTim8%";
	
	$conn = new mysqli($host,$user,$pwd,$db);
	if ($conn->connect_error) die($conn->connect_error);
	
	$query = "SELECT * FROM charges";
	$result = $conn->query($query);
	if (!$result) die($conn->error);
	
	$rows - $result->num_rows;
	
	for ($j = 0; $ < $rows; ++j)
	{ 
		$result->data_seek($j);
		echo 'Weekly Rent Charge: ' . $result->fetch_assoc()[rentCharge] . '<br>';
			$result->data_seek($j);
		echo 'depositCharge: ' . $result->fetch_assoc()[depositCharge] . '<br>';		
			$result->data_seek($j);
		echo 'Late Fee: ' . $result->fetch_assoc()[lateFee] . '<br>';	
			$result->data_seek($j);
		echo 'Miscelaneous Charge: ' . $result->fetch_assoc()[miscCharge] . '<br>';			
			$result->data_seek($j);
		echo 'keyWestCharge: ' . $result->fetch_assoc()[keyWestCharge] . '<br>';
				$result->data_seek($j);
		echo 'Term Fee: ' . $result->fetch_assoc()[terpFee] . '<br>';
				$result->data_seek($j);
		echo 'Pet Fee: ' . $result->fetch_assoc()[petFee] . '<br>';
				$result->data_seek($j);
		echo 'Week Ending Date: ' . $result->fetch_assoc()[petFee] . '<br>';
				$result->data_seek($j);
		echo 'TenantID: ' . $result->fetch_assoc()[tenantID] . '<br>';
				$result->data_seek($j);
				
	}
	$result->close();
	$conn->close();
	
	?>
