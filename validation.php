<?php
include 'component/Validate.php';
include 'functions.php';

session_start();
$form = new UserForm("user");
if ($form->validate($_POST)) {

    header("Location: /index.php");
}