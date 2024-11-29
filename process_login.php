<?php
session_start();
require_once "dbconnect.php";

$response = ['status' => '', 'message' => ''];

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name =$_POST['name'];
    $email =$_POST['email'];

    $query = $conn->query("SELECT * FROM form WHERE name = '$name' AND email = '$email'");

    if ($query && $query->num_rows > 0) {
        $user = $query->fetch_object();

        $_SESSION['name'] = $user->name;
        $_SESSION['user_id'] = $user->id;

       
        $response['message'] = 'Details matched.';
    
    } else {
        
        $response['message'] = 'Username or email does not match.';
    }
} 

header('Content-Type: application/json');
echo json_encode($response);
?>
