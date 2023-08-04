<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $parent = $_POST['parent'];
    $name = $_POST['name'];

    include "connect.php";

    $query = "INSERT INTO members (name, parentid) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $parent]);

    $newMemberId = $pdo->lastInsertId();
    echo "<li>{$name}</li>";
}
?>
