<?php
session_start();
require('header1.php');
include 'pdo_con.php';
// Assuming you have a logged-in user
$loggedInUser = $_SESSION['username'];

// Assuming $id is the ID of the ad to be edited
$id = $_GET['id'];

// Fetch the ad from the database
$stmt = $pdo->prepare("SELECT * FROM phones WHERE id = :id AND username = :username");
$stmt->execute([':id' => $id, ':username' => $loggedInUser]);
$ad = $stmt->fetch(PDO::FETCH_ASSOC);

if ($ad) {
    // The ad exists and belongs to the logged-in user, display the edit form
    echo '<div class="adBox">';
    echo '<div class="form">';
    echo '<form method="post" action="con_edit_ad.php"  onsubmit="return validate_adform();">';
    echo '<h2>Edit your ad</h2>';
    echo '<div class="ad_input">';
    echo '<input class="brand" type="text" name="brand" size="25" maxlength="25" placeholder="Brand" value="' . $ad['brand'] . '" />';
    echo '</div>';
    echo '<div class="ad_input">';
    echo '<input class="model" type="text" name="model" size="25" maxlength="25" placeholder="Model" value="' . $ad['model'] . '" />';
    echo '</div>';
    echo '<p>Release Date</p>';
    echo '<div class="ad_input">';
    echo '<input class="releaseDate" type="date" name="releaseDate" value="' . $ad['releaseDate'] . '" />';
    echo '</div>';
    echo '<div class="ad_select">';
    echo '<select id="nodes" name="nodes">';
    echo '<option value="-1" style="color:red;" selected="selected">Nodes</option>';
    echo '<option value="4">4</option>';
    echo '<option value="6">6</option>';
    echo '<option value="8">8</option>';
    echo '<option value="12">12</option>';
    echo '</select>'; 
    echo '<select id="RAM" name="RAM">';
    echo '<option value="-1" style="color:red;" selected="selected">RAM</option>';
    echo '<option value="2">2</option>';
    echo '<option value="4">4</option>';
    echo '<option value="8">8</option>';
    echo '<option value="16">16</option>';
    echo '<option value="32">32</option>';
    echo '</select>';  
    echo '<select id="OS" name="OS">';
    echo '<option value="-1" style="color:red;" selected="selected">OS</option>';
    echo '<option value="1">IOS</option>';
    echo '<option value="2">Android</option>';
    echo '</select>';
    echo '</div>';
    echo '<div class="ad_input">';
    echo '<input class="storageSize" type="text" name="storageSize" placeholder="Storage Size" value="' . $ad['storageSize'] . '" />';
    echo '</div>';
    echo '<div class="ad_input">';
    echo '<input class="colour" type="text" name="colour" placeholder="Colour" value="' . $ad['colour'] . '" />';
    echo '</div>';
    echo '<div class="ad_input">';
    echo '<input class="price" type="text" name="price" placeholder="Price" value="' . $ad['price'] . '" />';
    echo '</div>';
    echo '<p>Ad Release</p>';
    echo '<div class="ad_input">';
    echo '<input class="adRelease" type="date" name="adRelease" placeholder="Ad Release" value="' . $ad['adRelease'] . '" />';
    echo '</div>';
    echo '<div class="ad_input description_input">';
    echo '<input class="description" type="text" name="description" placeholder="Description" value="' . $ad['description'] . '" />';
    echo '</div>';
    echo '<input type="hidden" name="id" value="' . $id . '">';
    echo '<button type="Submit">Update</button>';
    echo '</form>';
    echo '<form method="post" action="delete_ad.php" onsubmit="return confirm(\'Are you sure you want to delete this ad?\');">';
    echo '<input type="hidden" name="id" value="' . $id . '">';
    echo '<button class="delete" type="Submit">Delete</button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
} else {
    // The ad doesn't exist or doesn't belong to the logged-in user
    echo "You do not have permission to edit this ad.";
}

require('footer.php');
?>
