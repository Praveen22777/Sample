<?php
include "dbconnect.php";


$sql = "SELECT * FROM form1 ORDER BY SNO DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h1>Latest Submitted Visitor Details</h1>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "
              <p><strong>SNO:</strong> {$row['SNO']}</p>
              <p><strong>Aadhar Number:</strong> {$row['AADHAR_NUMBER']}</p>
              <p><strong>Name:</strong> {$row['Name']}</p>
              <p><strong>Date of Birth:</strong> {$row['DOB']}</p>
              <p><strong>Gender:</strong> {$row['Gender']}</p>
              <p><strong>Father Name:</strong> {$row['Father_Name']}</p>
              <p><strong>Phone Number:</strong> {$row['Phone_Number']}</p>
              <p><strong>To Meet:</strong> {$row['To_Meet']}</p>
              <p><strong>Meet Reason:</strong> {$row['Meet_Reason']}</p>
              <p><strong>Address:</strong> {$row['Address']}</p>
              <p><strong>Company Name:</strong> {$row['Company_Name']}</p>
              <p><strong>Vendor Name:</strong> {$row['Vendor_Name']}</p>
              <p><strong>Valid From:</strong> {$row['Valid_from']}</p>
              <p><strong>Valid To:</strong> {$row['Valid_to']}</p>
              <p><strong>Issue Date:</strong> {$row['Issue_Date']}</p>
              <p><strong>Valid Days:</strong> {$row['Valid_Days']}</p>
              <p><strong>Total Days:</strong> {$row['Total_Days']}</p>
        ";
    }
} else {
    echo "<h3>No data found</h3>";
}

mysqli_close($conn);
?>
