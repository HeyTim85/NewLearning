<?php



	$host = "localhost";
	$db = "rockfountain";
	$user = "tim";
	$pwd = "mypasswd";
	
		$conn = new mysqli($host,$user,$pwd,$db);
	if ($conn->connect_error) die($conn->connect_error);
	
	
	if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['dateMovedIn']) && isset($_POST['deposit']) 
		&& isset($_POST['totalPaid']) && isset($_POST['delinquencyStartDate'])
		&& isset($_POST['delinquencyTotalOwed']) && isset($_POST['delinquencyPaid']) && isset($_POST['delinquencyBalance'])
		&& isset($_POST['dueNextPayment']) && isset($_POST['prepaid']) && isset($_POST['prepaidBalance']) && isset($_POST[apartmentNumber])
		&& isset($_POST['WeekRent']) && isset($_POST['customerID']) && isset($_POST['WeekEnding']))		
	{
		$lastName = $conn->real_escape_string($_POST['lastName']);
		$firstName = $conn->real_escape_string($_POST['firstName']);
		$dateMovedIn = $conn->real_escape_string($_POST['dateMovedIn']);
		$deposit = $conn->real_escape_string($_POST['deposit']);		
		$totalPaid = $conn->real_escape_string($_POST['TotalPaid']);
		$delinquencyStartDate = $conn->real_escape_string($_POST['delinquencyStartDate']);		
 		$delinquencyTotalOwed = $conn->real_escape_string($_POST['delinquencyTotalOwed']);
		$delinquencyPaid = $conn->real_escape_string($_POST['delinquencyPaid']);
		$delinquencyBalance = $conn->real_escape_string($_POST['delinquencyBalance']);
		$apartmentNumber = $conn->real_escape_string($_POST['apartmentNumber']);		
		$WeekRent = $conn->real_escape_string($_POST['WeekRent']);
		$customerID = $conn->real_escape_string($_POST['customerID']);
		$WeekEnding = $conn->real_escape_string($_POST['WeekEnding']);	
                
                $query = "INSERT INTO guest VALUES" . "('$lastName','$firstName','$dateMovedIn','$deposit','$totalPaid','$delinquencyStartDate',
				'$delinquencyTotalOwed','$delinquencyPaid','$delinquencyBalance','$apartmentNumber','$WeekRent',' ','$WeekEnding')";
		$result = $conn->query($query);
		if(!$result) die("INSERT failed");
		

		
		$query = "SELECT * FROM guest";
		$result = $conn->query($query);
		if(!$result) die("Database access failed");
                
                //assignment notes Put button to enter inputs. ID column auto inclement or look at sql first and add 1 number on top of that number.
//Select everything from rows and count the number of rows. At very end if server request = post array to see if something is posted.
//Or use set arrayed
//If you want to autoincrement you have to change you table as integer.
        }
        
        ?>

<form action="Student.php" method="post"><pre>
	Last  Name <input type="text" name="lastName">
	First Name <input type="text" name="firstName">
	Date Moved In <input type="text" name="dateMovedIn">
	Deposit <input type="text" name="deposit">
	Total Paid <input type="text" name="totalPaid">
	Delinquency Start Date <input type="text" name="delinquencyStartDate">
	Delinquency Total Owed <input type="text" name="delinquencyTotalOwed">
	delinquencyBalance <input type="text" name="delinquencyBalance">	
	Next Payment Due On Week Ending <input type="text" name="dueNextPayment">
	Prepayment Made <input type="text" name="prepaid">
	Prepaid Balance <input type="text" name="prepaidBalance">
	Apartment Number <input type="text" name="apartmentNumber">	
	Weekly Rent Amount <input type="text" name="WeekRent">	
	CustomerID <input type="text" name="customerID">
	Week Ending <input type="text" name="WeekEnding">

	
	<input type="submit" value="Add Record">
	</pre></form>