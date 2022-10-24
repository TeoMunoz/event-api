<?php 
     function get_all_students() {
            //Connect to data base.
    $database = new mysqli("localhost", "root", "", "uek295");

    //Get all students
    $result = $database->query("SELECT * FROM student");

    //Echo all students
    if ($result == false) {
        echo "An arre accorred while fechting the student data.";
    }
    else if ($result !== true) {
        if ($result->num_rows > 0) {
            while ($student = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $student["student_id"] . "</td>
                    <td>" . $student["name"] . "</td>
                    <td>" . $student["age"] . "</td>
                </tr>";
            }
        }
    }

     }

     function create_new_student() {
        
     }

/*
    //Connect to data base.
    $database = new mysqli("localhost", "root", "", "uek295");

    //Get all students
    $result = $database->query("SELECT * FROM student");

    //Echo all students
    if ($result == false) {
        echo "An arre accorred while fechting the student data.";
    }
    else if ($result !== true) {
        if ($result->num_rows > 0) {
            while ($student = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $student["student_id"] . "</td>
                    <td>" . $student["name"] . "</td>
                    <td>" . $student["age"] . "</td>
                </tr>";
            }
        }
    }*/
?>