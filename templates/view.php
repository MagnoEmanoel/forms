<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Visualização dos Dados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body { 
            background-color: #f2f2f2; 
        }
        .container { 
            background: #fff; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto; 
        }
        .table { 
            margin-top: 20px; 
        }
        th { 
            background-color: #b1d249; 
            color: #fff;
            text-align: center; 
        }
        td { 
            text-align: left; 
            vertical-align: middle;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) { 
            background-color: #f2f2f2; 
        }
        .alert { 
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Dados Registrados</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Setor</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Endereço</th>
                    <th>Cargo</th>
                    <th>Sistemas Acessados</th>
                    <th>Profissão</th>
                    <th>Especialidade</th>
                    <th>Registro Profissional</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['nome'] ?? 'Não informado') ?></td>
                    <td><?= htmlspecialchars($user['setor'] ?? 'Não informado') ?></td>
                    <td><?= htmlspecialchars($user['email'] ?? 'Não informado') ?></td>
                    <td><?= htmlspecialchars($user['cpf'] ?? 'Não informado') ?></td>
                    <td><?= htmlspecialchars($user['dataNascimento'] ?? 'Não informado') ?></td>
                    <td><?= htmlspecialchars($user['endereco'] ?? 'Não informado') ?></td>
                    <td><?= htmlspecialchars($user['cargo'] ?? 'Não informado') ?></td>
                    <td><?= isset($user['sistemas']) ? htmlspecialchars(implode(', ', $user['sistemas'])) : 'Não informado' ?></td>
                    <td><?= htmlspecialchars($user['profissao'] ?? 'Não informado') ?></td>
                    <td><?= htmlspecialchars($user['especialidade'] ?? 'Não informado') ?></td>
                    <td><?= htmlspecialchars($user['registro_profissional'] ?? 'Não informado') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>