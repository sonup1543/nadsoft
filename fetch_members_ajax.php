<?php
include "connect.php";

$parentsQuery = "SELECT * FROM parents";
$parentsStmt = $pdo->query($parentsQuery);
$parents = $parentsStmt->fetchAll();
echo "<ul>";
foreach ($parents as $parent) {
    
    echo "<li>{$parent['name']}</li>";
    $parentId = $parent['id']; 
    $query = "SELECT * FROM members WHERE parentid = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$parentId]);
    $children = $stmt->fetchAll();
    
    foreach ($children as $child) {        
        echo "<ul>";
       echo "<li>{$child['name']}</li>";
       echo "</ul>";
    }
  
    echo "</tr>";
}
echo "</ul>";






?>
