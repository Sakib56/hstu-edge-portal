<?php
include('../assets/config.php');

// Retrieve data from the AJAX request
$data = json_decode(file_get_contents('php://input'), true);
$courseName = $data['name'];

// Insert query
$query = "INSERT INTO courses (course_name) VALUES (?)";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $courseName);

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
