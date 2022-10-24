<?php
    require "../model/database.php";

    function get_all_person() {
		global $database;

		$result = $database->query("SELECT * FROM person");

		if ($result == false) {
			echo "A wild bug appeared.";
		}
		else if ($result !== true) {
			if ($result->num_rows > 0) {
				while ($person = $person->fetch_assoc()) {
					echo "
					<tr>
						<td>" . $person["id"] . "</td>
						<td>" . $person["name"] . "</td>
						<td>" . $person["location"] . "</td>
					</tr>";
				}
			}
		}
	}

    function create_new_person($name, $location) {
		global $database;

		$result = $database->query("INSERT INTO student(name, location) VALUES('$name', '$location')");

		if (!$result) {
			echo "An error occurred while saving the student data.";
		}
		else {
			echo "You have not saved the data correctly, good luck next time. .";
		}
	}

    function delete_person($id) {
		global $database;

		$result = $database->query("DELETE FROM person WHERE id = $id");

		if (!$result) {
			echo "It has not been possible to eliminate the person from the universe.";
		}
		else {
			echo "The person no longer exists on any kind of plane.";
		}
	}
    function get_person($id) {
		global $database;

		$result = $database->query("SELECT * FROM person WHERE id = id");

		if (!$result) {
			http_response_code(500);
			$error = array("message" => "No data has been retrieved.");
			echo json_encode($error);
		}
		else if ($result === true || $result->num_rows == 0) {
			http_response_code(404);
			$error = array("message" => "Do not be found to the person consult a nigromant in case that the person is dead. " . $id . ".");
			echo json_encode($error);
		}
		else {
			$person = $result->fetch_assoc();

			return $person;
		}
	}

    function update_person($id, $name, $location) {
		global $database;

		$result = $database->query("UPDATE person SET name = '$name', location = $lokation WHERE id = $id");

		if (!$result) {
			echo "Ufff a error";
		}
		else {
			echo "Person hav a neu live.";
		}
	}




?>