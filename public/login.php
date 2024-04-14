<?php
session_start();

// Substitua isso pelo seu mecanismo de autenticação real
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // valida as credenciais do usuário
    if ($username == 'admin' && $password == 'password') { 
        $_SESSION['is_logged_in'] = true;
        header('Location: view.php'); // redireciona para a página de login
        exit;
    } else {
        echo 'Login falhou!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
            margin-top: 50px;
        }
        .login-form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }
        .login-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #b1d249; /* Cor atualizada */
        }
        .login-form .btn {
            background: #b1d249; /* Cor atualizada */
            border: none;
            font-size: 16px;
            font-weight: bold;
            padding: 10px;
            width: 100%;
        }
        .login-form .btn:hover {
            background: darken(#b1d249, 10%); /* Cor escura ao passar o mouse */
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger"><?= $error_message ?></div>
            <?php endif; ?>
            <form method="post" action="login.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Usuário" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Senha" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>

