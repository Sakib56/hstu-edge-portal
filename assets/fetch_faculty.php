<?php
include("config.php");

$sql = "SELECT MIN(id) AS id, faculty_name FROM department GROUP BY faculty_name";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['faculty_name']) . '</option>';
    }
} else {
    echo '<option value="" disabled>No Faculty available</option>';
}
?>
