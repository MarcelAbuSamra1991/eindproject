<?php
include 'sessions.php';
session_unset();
session_destroy();

header("Location:../index.medewerkers.php");

?>