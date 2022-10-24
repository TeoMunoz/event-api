<?php
    header("Content-Type: application/json");

    require "../controller/persons.php"

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$request_body_string = file_get_contents("php://input");

		$request_data = json_decode($request_body_string, true);

		create_new_student($request_data["name"], $request_data["location"]);

    else if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
        $id = $_GET["student_id"];
    
        delete_person($id);
    }

    else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $d = $_GET["student_id"];

        $person = get_person($id);
    
        if ($person) {
                echo json_encode($person);
    }

    else if ($_SERVER["REQUEST_METHOD"] == "PUT") {
		$id = $_GET["id"];

		$request_body_string = file_get_contents("php://input");

		$request_data = json_decode($request_body_string, true);

		update_person($id, $request_data["name"], $request_data["location"]);
	}

?>