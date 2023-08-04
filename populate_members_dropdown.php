<?php
include "connect.php";

$query = "SELECT * FROM parents";
$stmt = $pdo->query($query);
$members = $stmt->fetchAll();
foreach ($members as $member) {
    echo "<option value='{$member['id']}'>{$member['name']}</option>";
}
?>
