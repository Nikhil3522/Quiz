<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('cons.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$msisdn = isset($_POST['msisdn']) ?  $_POST['msisdn'] : $_GET['msisdn'];

$query = "SELECT * from users where msisdn = '$msisdn'";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}

if($result->num_rows > 0){

    $user_data = $result->fetch_assoc();
    $_SESSION['user_id'] = $user_data['user_id'];
    $user_id = $user_data['user_id'];
    setcookie(
        'user_id', 
        $user_data['user_id'], 
        time() + (60*60),  // Cookie expiry
        '/',  // Path
        '',   // Domain
        false, // Secure (only send over HTTPS)
        true // HttpOnly (restricts JavaScript access)
    );

}else{

    $query = "INSERT INTO users (msisdn) VALUES ('$msisdn')";
    $insert_data = $conn->query($query);

    if ($insert_data) {
        // Get the auto-incremented ID of the newly inserted row
        $new_id = $conn->insert_id;
        $_SESSION["user_id"] = $new_id;
        $user_id = $new_id;
        setcookie(
            'user_id', 
            $new_id, 
            time() + (60*60),  // Cookie expiry
            '/',  // Path
            '',   // Domain
            false, // Secure (only send over HTTPS)
            true // HttpOnly (restricts JavaScript access)
        );
        
    } else {
        // Handle the error if the query fails
        header('Location: logout.php');
        die();
        echo "Error in query: " . $conn->error;
    }
}


header('Location: home-test.php');
die();
