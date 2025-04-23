<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

include('cons.php');
$function_name = isset($_GET['function_name']) ? $_GET['function_name'] : $_GET['func'];

switch ($function_name) {
    case 'ADD_USER':

        $msisdn = $_POST['msisdn'];

        $query = "SELECT * from users where msisdn = '$msisdn'";
        $result = $conn->query($query);

        if($result->num_rows > 0){

            $user_data = $result->fetch_assoc();
            $_SESSION['user_id'] = $user_data['id'];

        }else{
            $query = "INSERT INTO users (msisdn) VALUES ('$msisdn')";
            $insert_data = $conn->query($query);

            if ($insert_data) {
                // Get the auto-incremented ID of the newly inserted row
                $new_id = $conn->insert_id;
                $_SESSION["user_id"] = $new_id;
                setcookie(
                    'user_id', 
                    $new_id, 
                    time() + (60*60),  // Cookie expiry
                    '/',  // Path
                    '',   // Domain
                    true, // Secure (only send over HTTPS)
                    true // HttpOnly (restricts JavaScript access)
                );
                
            } else {
                // Handle the error if the query fails
                echo "Error in query: " . $conn->error;
            }
        }

        // die("DONE");
        
        header('Location: index.php');
        break;
    case 'load_questions':

        if(isset($_GET['quiz_level']) && !empty($_GET['quiz_level'])){
            $level = $_GET['quiz_level']; 
            $query = "SELECT question_id, quiz_level, type, questions, first_option, second_option, third_option, fourth_option, fifth_option  FROM test_your_english_questions WHERE quiz_level = ?;";

            $stmt = $conn->prepare($query);
            $stmt->bind_param('s', $level);
        }else if(isset($_GET['quiz_id']) && !empty($_GET['quiz_id'])){
            $quiz_id = $_GET['quiz_id'];
            $query = "SELECT question_id, type, questions, first_option, second_option, third_option, fourth_option FROM quiz_questions WHERE quiz_id = ?;"; 
            
            $stmt = $conn->prepare($query);
            $stmt->bind_param('i', $quiz_id);
        }else {
            echo "Quiz id OR quiz level is not found";
            break;
        }

        $stmt->execute();
            
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC); 

        echo json_encode($data);

        break;
    case 'get_correct_answer':

        if(isset($_GET['quiz_level']) && !empty($_GET['quiz_level'])){
            $level = $_GET['quiz_level']; 

            $query = "SELECT question_id, correct_answer FROM test_your_english_questions WHERE quiz_level = ?;";

            $stmt = $conn->prepare($query);
            $stmt->bind_param('s', $level);
        }else if(isset($_GET['quiz_id']) && !empty($_GET['quiz_id'])){
            $quiz_id = $_GET['quiz_id'];

            $query = "SELECT question_id, correct_answer FROM quiz_questions WHERE quiz_id = ?;";

            $stmt = $conn->prepare($query);
            $stmt->bind_param('i', $quiz_id);
        }else{
            echo "Quiz id OR quiz level not found";
            break;
        }

        $stmt->execute();

        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        
        echo json_encode($data);
        break;
    case 'submit_answer':
        $quiz_id = $_GET['quiz_id'];
        $answer_json = $_GET['answer_json']; // Make sure this is already a valid JSON string
        $correct_quest = $_GET['correct_ques'];
        $incorrect_ques = $_GET['incorrect_ques'];
        $type = $_GET['type'];
        $table_name = "quiz_answer";

        if(isset($type) && $type == "level_test"){
            $table_name = "english_level_test_answer";
        }

        // Escape the JSON string properly
        $answer_json = $conn->real_escape_string($answer_json);

        // Use single quotes around the JSON string in the query
        $query = "INSERT INTO $table_name(quiz_id, user_id, answer_json, correct_ques, incorrect_ques) 
                VALUES($quiz_id, $user_id, '$answer_json', $correct_quest, $incorrect_ques)";

        if ($conn->query($query)) {
            echo "Submitted";
        } else {
            echo "Error: " . $conn->error;
        }
        break;
    case 'upgrade_level':
        $new_level = $_GET['new_level'];
        $unlock_value = $_GET['unlock_value'];

        $query = "UPDATE users SET english_level = '$new_level', first_stage_unlock_value = '$unlock_value' WHERE user_id = $user_id";

        if ($conn->query($query)) {
            echo "Level Updated";
        } else {
            echo "Error: " . $conn->error;
        }
        break;
    case 'get_level':
        $query = "SELECT english_level, first_stage_unlock_value FROM users WHERE user_id = $user_id";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode(["english_level" => $row["english_level"], "first_stage_unlock_value" => $row['first_stage_unlock_value']]);
        } else {
            echo json_encode(["error" => "User not found"]);
        }
        break;
    case 'get_unlock_value':
        $curren_stage = $_GET['current_stage'];
        $pre_stage  = $_GET['pre_stage_id'];

        $query = "SELECT * FROM user_quiz_unlocks WHERE user_id = $user_id AND current_stage = ? AND pre_stage_id = ? LIMIT 1";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('ii', $curren_stage, $pre_stage);

        $stmt->execute();

        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        
        echo json_encode($data);
        break;
    case 'get_user_submitted_answer':
            $quiz_id = $_GET['quiz_id'];
        
            $query = "SELECT * FROM english_level_test_answer WHERE user_id = $user_id AND quiz_id = $quiz_id ORDER BY quiz_answer_id DESC LIMIT 1";
            $result = $conn->query($query);
        
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc(); // Fetch the result as an associative array
                echo json_encode(['status' => 'success', 'data' => $row]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'No data found']);
            }        
        break;
    default:
        # code...
        break;
}

?>