<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;

    require __DIR__ . "/../vendor/autoload.php";

    $app = AppFactory::create();

    $app->get("/", function (Request $request, Response $response, $args) {
        echo "Hello, World";
        return $response;
    });

    $app->post("/Authenticate", function (Request $request, Response $response, $args) {
        

        if ()

        return $response;
    });

    $app->post("/Student", function (Request $request, Response $response, $args) {
        function get_student($student_id) {
            global $database;
    
            $result = $database->query("SELECT * FROM student WHERE student_id = $student_id");
    
            if (!$result) {
                http_response_code(500);
                $error = array("message" => "An error occurred while fetching the student.");
                echo json_encode($error);
            }
            else if ($result === true || $result->num_rows == 0) {
                http_response_code(404);
                $error = array("message" => "No student found for the ID " . $student_id . ".");
                echo json_encode($error);
            }
            else {
                $student = $result->fetch_assoc();
    
                return $student;
            }
        }
        
        return $response;
    });

    $app->get("/Student/{student_id}", function (Request $request, Response $response, $args) {
        $student_id = $args["student_id"];

        return $response;
    });

    $app->();
?>