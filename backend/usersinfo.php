<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "housedb";


$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);


if (!$conn) {
    echo json_encode(['error' => 'Database connection failed: ' . mysqli_connect_error()]);
    exit; 
}

header('Content-Type: application/json');  

$get_user = $conn->prepare("SELECT blklot, f_name, part FROM personal_info");
if (!$get_user) {
    echo json_encode(['error' => 'Failed to prepare SQL query: ' . mysqli_error($conn)]);
    exit; 
}

$get_user->execute();
$result = $get_user->get_result();


if ($result->num_rows === 0) {
    echo json_encode(['error' => 'No data found']);

}


$data = $result->fetch_all(MYSQLI_ASSOC);


echo json_encode($data);


$conn->close();
?>
