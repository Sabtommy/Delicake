<?php
if (isset($_SESSION['previousPage'])) {
    $previousPage = $_SESSION['previousPage'];
}

$_SESSION['previousPage'] = basename($_SERVER['PHP_SELF']);
