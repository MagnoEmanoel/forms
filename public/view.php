<?php
session_start();

// Verifica se o usuário está logado. Se não, redireciona para a página de login.
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Se o usuário estiver logado, continua para buscar os dados e exibir a página.
require '../src/Form/RegistrationForm.php';

$form = new RegistrationForm();
$data = $form->getData();

include '../templates/view.php';
?>
