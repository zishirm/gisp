<?php
session_start();
session_start();
session_destroy();
// Redirect to the login page:
header('Location: ../frontend/login/');
?>
