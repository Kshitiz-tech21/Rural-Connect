<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    if (!empty($_GET['search'])) {
        $search_term = $_GET['search'];
        
        echo "You searched for: " . htmlspecialchars($search_term);
        
    } else {
        echo "Search term is empty";
    }
}
?>

