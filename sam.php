<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Recommended Items</title>
</head>
<body>
    <h1>Recommended Items</h1>
    <?php
    // Include the recommendation algorithm code
    require_once('recommendations.php');
    function get_recommendations($user_Id) {
        global $conn; // Use the global database connection
    
        // Query the database for user recommendations
        $query = "SELECT item_name, item_description FROM items WHERE item_id IN (SELECT item_id FROM recommendations WHERE user_id = $user_Id)";
        $result = mysqli_query($conn, $query);
    
        // Create an array of recommended items
        $recommended_items = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $recommended_items[] = $row;
        }
    
        // Return the recommended items
        return $recommended_items;
    }
    // Get the user ID from the session
    $user_id = $_SESSION['user_Id'];

    // Get the recommended items for the user
    $recommended_items = get_recommendations($user_Id);

    // Display recommended items
    foreach ($recommended_items as $item) {
        echo "<h2>" . $item['item_name'] . "</h2>";
        echo "<p>" . $item['item_description'] . "</p>";
    }
    ?>
</body>
</html>
