<?php
include "dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $AADHAR_NUMBER = $_POST['AADHAR_NUMBER'];
    $Name = $_POST['Name'];
    $DOB = $_POST['DOB'];
    $Gender = $_POST['Gender'];
    $Father_Name = $_POST['Father_Name'];
    $Phone_Number = $_POST['Phone_Number'];
    $To_Meet = $_POST['To_Meet'];
    $Meet_Reason = $_POST['Meet_Reason'];
    $Address = $_POST['Address'];
    $Company_Name = $_POST['Company_Name'];
    $Vendor_Name = $_POST['Vendor_Name'];
    $Valid_from = $_POST['Valid_from'];
    $Valid_to = $_POST['Valid_to'];
    $Issue_Date = $_POST['Issue_Date'];
    $Valid_Days = $_POST['Valid_Days'];
    $Total_Days = $_POST['Total_Days'];

    
    $sql = "INSERT INTO form1 (AADHAR_NUMBER, Name, DOB, Gender, Father_Name, Phone_Number, To_Meet, Meet_Reason, Address, Company_Name, Vendor_Name, Valid_from, Valid_to, Issue_Date, Valid_Days, Total_Days)
            VALUES ('$AADHAR_NUMBER', '$Name', '$DOB', '$Gender', '$Father_Name', '$Phone_Number', '$To_Meet', '$Meet_Reason', '$Address', '$Company_Name', '$Vendor_Name', '$Valid_from', '$Valid_to', '$Issue_Date', '$Valid_Days', '$Total_Days')";

    if (mysqli_query($conn, $sql)) {
        
        header("Location: display.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
