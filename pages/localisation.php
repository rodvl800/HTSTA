<?php
require_once 'dbconfig.php';
function callLocalisation($language, $index) {
    global $db;
    $language = mysqli_real_escape_string($db, $language);

    $sql = "SELECT " . $language . " AS string FROM localisation WHERE id = $index";
    $result = mysqli_query($db, $sql);

    // Check for errors
    if (!$result) {
        die("Error fetching localisation: " . mysqli_error($db));
    }

    // Extract the string
    $row = mysqli_fetch_assoc($result);
    $string = isset($row['string']) ? $row['string'] : null;
    mysqli_free_result($result);
    return $string;
}