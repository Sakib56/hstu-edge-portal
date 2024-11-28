<?php
include("config.php");

$sql = "SELECT id, dept_name FROM department";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['dept_name']) . '</option>';
    }
} else {
    echo '<option value="" disabled>No dept available</option>';
}
?>
