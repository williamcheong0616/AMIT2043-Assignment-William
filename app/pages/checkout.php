<?php
if (isset($_POST['sub']) && $_POST['sub'] === "Pay Now") {
    $ticket_id = $_POST['id'];

    query("INSERT INTO ticket_payments (ticket_id, address) VALUES (:ticket_id, :address)", [
        'ticket_id' => $ticket_id,
        'address' => $_POST['address']
    ]);

    header("Location: /assignment_william/public/ticket?ticket_id=$ticket_id");
    die();
}

$ticket_id = $_GET['ticket_id'];

if (empty($_GET['ticket_id'])) {
    // header("Location: /assignment_william/public");
    die();
}

$ticket = query("SELECT * FROM tickets WHERE id = :id", [
    'id' => $ticket_id
]);

// if (!$ticket) {
//     header("Location: /assignment_william/public");
// }
?>

<!-- TODO: design interface -->
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['ticket_id'] ?>">
    <input type="text" id="address" name="address" placeholder="Address">

    <input type="submit" name="sub" value="Pay Now">
</form>