<?php 
    $database = new mysqli("localhost", "root", "", "auftrag2");

    $result = $database->query("SELECT * FROM movies_animes");

    if ($result == false) {
        echo "An arre accorred while fechting the student data.";
    }
    else if ($result !== true) {
        if ($result->num_rows > 0) {
            while ($student = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $student["id"] . "</td>
                    <td>" . $student["name"] . "</td>
                    <td>" . $student["note"] . "</td>
                </tr>";
            }
        }
    }
?>