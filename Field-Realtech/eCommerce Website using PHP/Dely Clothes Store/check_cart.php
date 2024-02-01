<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $totalItems = intval($_POST['totalItems']);

    if ($totalItems === 0) {
        header("Location: cart.php?message=emptyCart");
        exit();
    } else {
        header("Location: payments.php");
        exit();
    }
}
?>
