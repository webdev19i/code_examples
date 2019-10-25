<?php
require_once('connection.php');

class Students
{
    
    function list_of_students() // action
    {

        $db = new DB();             // create a new object of the Class DB
        $con = $db->connect();      // call the connect method in the $db object
        if ($con) {                 // make sure that a connection is establiched
            
            $results = array();     // prepare an array that can hold the result

            $stmt = $con->prepare("SELECT * FROM students");        // prepare the select statement
            $stmt->execute();                                       // execute the select statement

            while ($row = $stmt->fetch()) {                         // loop through each row in the result from the database
             
                $results[] = [$row["id"], $row["name"], $row["email"], $row["cpr"]];  // add the result to the results array
                
                // [[1, 'Claus Bove', 'clbo@kea.dk', '21212121'],        [2, 'Julie Fallon', 'jul@kea.dk', '2121212']]

            }
            $stmt = null;           // empty the statement object
            $db->disconnect($con);  // close connection

            return $results;        // return the result for use where list_of_students() is called
        } else
            return false;
    }

    function get_student($id)
    {

        $db = new DB();
        $con = $db->connect();
        if ($con) {

            $stmt = $con->prepare("SELECT * FROM students WHERE students_id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $row = $stmt->fetch();
            // [$row["students_id"], $row["first_name"], $row["last_name"], $row["email"], $row["cpr"]];

            $stmt = null;
            $db->disconnect($con);

            return $row;
        } else { }
    }


}



$x = array();

$x[] = 'Claus';
$x[] = 'clbo';

echo $x[0];


?>