<?php
session_start(); //início do script
require '../src/Form/RegistrationForm.php';

$form = new RegistrationForm();
$form->handlePost();

include '../templates/form.php';
