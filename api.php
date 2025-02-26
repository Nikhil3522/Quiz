<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

include('cons.php');
$function_name = $_GET['function_name'];
$user_id = 1;

switch ($function_name) {
    case 'load_questions':

        if($_GET['quiz_level']){
            $level = $_GET['quiz_level']; 
            $query = "SELECT question_id, quiz_level, type, questions, first_option, second_option, third_option, fourth_option, fifth_option  FROM test_your_english_questions WHERE quiz_level = ?;";

            $stmt = $conn->prepare($query);
            $stmt->bind_param('s', $level);
        }else{
            $quiz_id = 31;
            $query = "SELECT question_id, type, questions, first_option, second_option, third_option, fourth_option FROM quiz_questions WHERE quiz_id = ?;"; 
            
            $stmt = $conn->prepare($query);
            $stmt->bind_param('i', $quiz_id);
        }

        $stmt->execute();
            
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC); 

        echo json_encode($data);

        break;
    case 'get_correct_answer':

        if($_GET['quiz_level']){
            $level = $_GET['quiz_level']; 

            $query = "SELECT question_id, correct_answer FROM test_your_english_questions WHERE quiz_level = ?;";

            $stmt = $conn->prepare($query);
            $stmt->bind_param('s', $level);
        }else{
            $quiz_id = 31;

            $query = "SELECT question_id, correct_answer FROM quiz_questions WHERE quiz_id = ?;";

            $stmt = $conn->prepare($query);
            $stmt->bind_param('i', $quiz_id);
        }

        $stmt->execute();

        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        
        echo json_encode($data);
        break;
    case 'submit_answer':
        $quiz_id = $_GET['quiz_id'];
        $user_id = 1;
        $answer_json = $_GET['answer_json']; // Make sure this is already a valid JSON string
        $correct_quest = $_GET['correct_ques'];
        $incorrect_ques = $_GET['incorrect_ques'];

        // Escape the JSON string properly
        $answer_json = $conn->real_escape_string($answer_json);

        // Use single quotes around the JSON string in the query
        $query = "INSERT INTO quiz_answer(quiz_id, user_id, answer_json, correct_ques, incorrect_ques) 
                VALUES($quiz_id, $user_id, '$answer_json', $correct_quest, $incorrect_ques)";

        if ($conn->query($query)) {
            echo "Submitted";
        } else {
            echo "Error: " . $conn->error;
        }
        break;
    default:
        # code...
        break;
}

?>