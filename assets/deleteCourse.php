<?php
include('../assets/config.php');

// Retrieve data from the AJAX request
$data = json_decode(file_get_contents('php://input'), true);
$courseId = $data['id'];

// Delete query
$query = "DELETE FROM courses WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $courseId);

$response = [];
if ($stmt->execute()) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}
$stmt->close();
$conn->close();

echo json_encode($response);
?>
