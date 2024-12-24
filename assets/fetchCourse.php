<?php
// Include database connection
include('../assets/config.php');

// Query to fetch courses data
$query = "SELECT id, course_name, background FROM courses"; // Add 'id' for identifying records
$result = mysqli_query($conn, $query);

// Check if the query returns any rows
if (mysqli_num_rows($result) > 0) {
    $sl = 1; // Serial number counter
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $sl++ . "</td>"; // Increment serial number
        echo "<td>" . htmlspecialchars($row['course_name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['background']) . "</td>";
        echo "<td style='display: flex; gap: 8px; align-items: center;'>
                <button class='btn btn-sm btn-primary' onclick=\"openEditModal('" . $row['id'] . "', '" . htmlspecialchars($row['course_name']) . "')\">Edit</button>
                <button class='btn btn-sm btn-danger' onclick=\"openDeleteModal('" . $row['id'] . "')\">Delete</button>
              </td>";
        echo "</tr>";
        
    }
} else {
    echo "<tr>
            <td colspan='4' class='text-center'>No Data Available</td>
          </tr>";
}
?>
