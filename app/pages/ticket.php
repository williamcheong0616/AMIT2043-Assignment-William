<?php
$ticket = query_row("select * from tickets t join ticket_payments tp on tp.ticket_id = t.id join posts p on t.post_id = p.slug where t.id = :id", ['id' => $_GET['ticket_id']]);
print_r($ticket);
?>
<!-- implement ticket view -->