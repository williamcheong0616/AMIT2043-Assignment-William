<?php

$data = json_decode(file_get_contents('php://input'), true);
$post_id = $data['post_id'];
$seat_numbers = $data['seat_numbers'];

$result = query(
    "insert into tickets (user_id , post_id, seat_numbers) values (:user_id, :post_id, :seat_numbers)",
    [
        'user_id' => $_SESSION['USER']['id'],
        'post_id' => $post_id,
        'seat_numbers' => json_encode($seat_numbers)
    ]
);

http_response_code(200);
echo json_encode([
    'status' => 'success',
    'id' => $result['last_insert_id']
]);
