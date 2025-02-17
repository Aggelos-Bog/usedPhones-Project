<?php
include 'pdo_con.php';
// Query the database
$stmt = $pdo->query("SELECT phones.*, users.email FROM phones JOIN users ON phones.username = users.username");

// Fetch all rows
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Check if any rows were returned
if ($rows) {
    // Output data of each row
    foreach ($rows as $row) {
        echo '<div class="buy_ad">';
        if (isset($_SESSION['username']) && $_SESSION['username'] == $row['username']) {
            echo '<div class="update">';
            echo '  <a href="edit_ad.php?id=' . $row['id'] . '">';
            echo '    <span></span>';
            echo '    <span></span>';
            echo '    <span></span>';
            echo '  </a>';
            echo '</div>';
        }
        echo '  <div class="img"><img src="images/phone_img.jpg"></div>';
        echo '  <div class="info">';
        echo '    <div class="adTitle">';
        echo '      <h2>' . $row["brand"] . ' ' . $row["model"] . '</h2>';
        echo '      <p class="price">' . $row["price"] . '$</p>';
        echo '    </div>';
        echo '    <div class="stats">';
        echo '      <div class="statCard">';
        echo '        <p class="releaseDate">Release-Date:' . $row["releaseDate"] . '</p>';
        echo '        <p class="nodes">Nodes:' . $row["nodes"] . '</p>';
        echo '        <p class="ram">RAM:' . $row["RAM"] . '</p>';
        echo '        <p class="storageSize">Storage-Size:' . $row["storageSize"] . 'GB</p>';
        echo '      </div>';
        echo '      <div class="statCard">';
        echo '        <p class="colour">Colour:' . $row["colour"] . '</p>';
        echo '        <p class="OS">OS:' . $row["OS"] . '</p>';
        echo '        <p class="adRelease">Ad-Release:' . $row["adRelease"] . '</p>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="sellerInfo">';
        echo '    <p>' . $row['email'] . '</p>';  // Display the email of the ad's creator
        echo '    <p>' . $row["description"] . '</p>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo "No results";
}

?>
