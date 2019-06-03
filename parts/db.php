<?php
global $db;
try {
    $db = new PDO('sqlite:ToDoList.db3');
} catch (PDOException $e) {
    die("Database error: $e");
}

function findToDos($done) {
  global $db;
  $statement = $db -> prepare("SELECT * FROM todo WHERE done = :done ORDER BY id");
  $statement -> bindParam(":done", $done1, $id);
  $statement -> execute();
  $rows = $statement -> fetchAll(PDO::FETCH_ASSOC);
}

function adHocQuery($q) {
    global $db;
    $st = $db -> prepare($q);
    $st -> execute();
    return $st -> fetchAll(PDO::FETCH_ASSOC);
}
?>