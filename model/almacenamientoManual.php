<?php

   include_once('db.php');

   function updateOutput($id, $state) {
       include_once('conn.php');

       $sql = "UPDATE Outputs SET state='" . $state . "' WHERE id='". $id .  "'";
      if ($conn->query($sql) === TRUE) {
           return "Actualización exitosa";
       }
       else {
           return "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
   }

   function getAllOutputs() {
    include_once('conn.php');

       $sql = "SELECT id, name, board, gpio, state FROM Outputs  WHERE id = 5 ORDER BY board";
       if ($result = $conn->query($sql)) {
           return $result;
       }
       else {
           return false;
       }
       $conn->close();
   }

   function getAllOutputs2() {
    include_once('conn.php');

       $sql = "SELECT id, name, board, gpio, state FROM Outputs  WHERE id = 8 ORDER BY board";
       if ($result = $conn->query($sql)) {
           return $result;
       }
       else {
           return false;
       }
       $conn->close();
   }

   function getAllOutputs3() {
    include_once('conn.php');

       $sql = "SELECT id, name, board, gpio, state FROM Outputs  WHERE id = 9 ORDER BY board";
       if ($result = $conn->query($sql)) {
           return $result;
       }
       else {
           return false;
       }
       $conn->close();
   }
   function getAllOutputs4() {
    include_once('conn.php');

       $sql = "SELECT id, name, board, gpio, state, fecha,fin FROM Outputs  WHERE id = 10 ORDER BY board";
       if ($result = $conn->query($sql)) {
           return $result;
       }
       else {
           return false;
       }
      
       $conn->close();
   }

   function getAllOutputStates($board) {
    include_once('conn.php');

       $sql = "SELECT gpio, state FROM Outputs WHERE board='" . $board . "'";
       if ($result = $conn->query($sql)) {
           return $result;
       }
       else {
           return false;
       }
       $conn->close();
   }
?>
