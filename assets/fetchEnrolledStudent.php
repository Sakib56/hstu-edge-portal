<?php
// Include database connection
include('config.php');

// Query to fetch enrolled student data
$query = "SELECT * FROM enrolled_students"; // Adjust fields as needed
$result = mysqli_query($conn, $query);

// Check if the query returns any rows
if (mysqli_num_rows($result) > 0) {
    $sl = 1; // Serial number counter
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $sl++ . "</td>"; // Increment serial number
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['std_id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
        echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
        echo "<td style='display: flex; gap: 8px; align-items: center;'>
                <button class='btn btn-sm btn-primary' onclick=\"openEditModal('" . $row['id'] . "')\">Edit</button>
                <button class='btn btn-sm btn-warning' onclick=\"copyRecord('" . $row['id'] . "')\">Copy</button>
                <button class='btn btn-sm btn-danger' onclick=\"openDeleteModal('" . $row['id'] . "')\">Delete</button>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr>
            <td colspan='7' class='text-center'>No Data Available</td>
          </tr>";
}
?>
