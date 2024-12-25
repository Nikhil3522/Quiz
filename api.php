<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

include('cons.php');
$function_name = $_GET['function_name'];
$user_id = 1;

switch ($function_name) {
    case 'load_questions':

        $quiz_id = 31;

        $query = "SELECT question_id, type, questions, first_option, second_option, third_option, fourth_option FROM quiz_questions WHERE quiz_id = ?;";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $quiz_id);

        $stmt->execute();
        
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        
        echo json_encode($data);

        break;
    default:
        # code...
        break;
}

?>