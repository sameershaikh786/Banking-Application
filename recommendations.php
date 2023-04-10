<?php

// Connect to the database
include 'assets/db.php'

// Query the database for user transaction history
$query = "SELECT user_id, transaction_amount, transaction_date FROM transactions";
$result = mysqli_query($conn, $query);

// Parse transaction history into user-item matrix
$user_item_matrix = array();
while ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['user_id'];
    $item_id = $row['transaction_amount'];
    $rating = 1; // Rating can be based on transaction amount, frequency, etc.
    if (!isset($user_item_matrix[$user_id])) {
        $user_item_matrix[$user_id] = array();
    }
    $user_item_matrix[$user_id][$item_id] = $rating;
}

// Compute similarity between users using cosine similarity
function cosine_similarity($vector1, $vector2) {
    $dot_product = 0;
    $magnitude1 = 0;
    $magnitude2 = 0;
    foreach ($vector1 as $item_id => $rating) {
        if (isset($vector2[$item_id])) {
            $dot_product += $rating * $vector2[$item_id];
        }
        $magnitude1 += $rating * $rating;
    }
    foreach ($vector2 as $item_id => $rating) {
        $magnitude2 += $rating * $rating;
    }
    $magnitude1 = sqrt($magnitude1);
    $magnitude2 = sqrt($magnitude2);
    if ($magnitude1 * $magnitude2 == 0) {
        return 0;
    }
    return $dot_product / ($magnitude1 * $magnitude2);
}

// Compute top-N similar users for each user
$similar_users = array();
foreach ($user_item_matrix as $user1 => $items1) {
    $similar_users[$user1] = array();
    foreach ($user_item_matrix as $user2 => $items2) {
        if ($user1 == $user2) {
            continue;
        }
        $similarity = cosine_similarity($items1, $items2);
        $similar_users[$user1][$user2] = $similarity;
    }
    arsort($similar_users[$user1]);
    $similar_users[$user1] = array_slice($similar_users[$user1], 0, $N, true);
}


// Compute top-N recommended items for each user
?>