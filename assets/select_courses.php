<?php
include("config.php");

$sql = "SELECT id, course_name FROM courses";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['course_name']) . '</option>';
    }
} else {
    echo '<option value="" disabled>No courses available</option>';
}
?>
