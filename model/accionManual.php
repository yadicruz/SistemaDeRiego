/*Iniciando formato de php*/
<?php

include_once('almacenamientoManual.php');
 
$action = $id = $name = $gpio = $state = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = test_input($_GET["action"]);
    if ($action == "outputs_state") {
        $board = test_input($_GET["board"]);
        $result = getAllOutputStates($board);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $rows[$row["gpio"]] = $row["state"];
            }
        }
        echo json_encode($rows);
        
    }
    else if ($action == "output_update") {
        $id = test_input($_GET["id"]);
        $state = test_input($_GET["state"]);
        $result = updateOutput($id, $state);
        echo $result;
    }
    
    else {
        echo "Invalid HTTP request.";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
