<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }
        legend {
            width: auto;
            background: #b1d249; /* Cor atualizada */
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 1.1em;
        }
        .btn-primary {
            background: #b1d249; /* Cor atualizada */
            border: none;
        }
        .btn-primary:hover {
            background: darken(#b1d249, 10%); /* Cor escura ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php if (isset($form) && $form->wasSubmitted()): ?>
            <div class="alert alert-success" role="alert">
                Obrigado por se registrar!
            </div>
            <?php $form->clearSubmissionFlag(); ?>
        <?php else: ?>
            <h2>Cadastro de Usuário - Novos Colaboradores</h2>
            <form action="index.php" method="post">
                <fieldset class="border p-2">
                    <legend class="w-auto">Informações Pessoais</legend>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="setor">Setor:</label>
                        <input type="text" class="form-control" id="setor" name="setor" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="form-group">
                        <label for="dataNascimento">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo:</label>
                        <input type="text" class="form-control" id="cargo" name="cargo" required>
                    </div>
                </fieldset>
                <fieldset class="border p-2">
                <legend class="w-auto">Endereço</legend>
                <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                    </div>
                </fieldset>
                
                <fieldset class="border p-2">
                <legend class="w-auto">Acesso a Sistemas</legend>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Piramide" id="Piramide" name="sistemas[]">
                    <label class="form-check-label" for="Piramide">Piramide</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="MV_Soul" id="MV_Soul" name="sistemas[]">
                    <label class="form-check-label" for="MV_Soul">MV Soul</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="MV_PEP" id="MV_PEP" name="sistemas[]">
                    <label class="form-check-label" for="MV_PEP">MV PEP</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="PEP_Unimed" id="PEP_Unimed" name="sistemas[]">
                    <label class="form-check-label" for="PEP_Unimed">PEP Unimed</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Bitrix" id="Bitrix" name="sistemas[]">
                    <label class="form-check-label" for="Bitrix">Bitrix</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Saw_Operador" id="Saw_Operador" name="sistemas[]">
                    <label class="form-check-label" for="Saw_Operador">Saw Operador</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Saw_Prestador" id="Saw_Prestador" name="sistemas[]">
                    <label class="form-check-label" for="Saw_Prestador">Saw Prestador</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Saw_Call" id="Saw_Call" name="sistemas[]">
                    <label class="form-check-label" for="Saw_Call">Saw Call</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="AD_Computador" id="AD_Computador" name="sistemas[]">
                    <label class="form-check-label" for="AD_Computador">AD (computador)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="SGA" id="SGA" name="sistemas[]">
                    <label class="form-check-label" for="SGA">SGA</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Infomed" id="Infomed" name="sistemas[]">
                    <label class="form-check-label" for="Infomed">Infomed</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Agil" id="Agil" name="sistemas[]">
                    <label class="form-check-label" for="Agil">Agil</label>
                </div>

                </fieldset>
                
                <fieldset class="border p-2">
                <legend class="w-auto">Informações Profissionais</legend>
                <div class="form-group">
                    <label for="profissao">Profissão:</label>
                    <select class="form-control" id="profissao" name="profissao">
                        <option value="medico">Médico</option>
                        <option value="enfermeiro">Enfermeiro</option>
                        <option value="tecnico">Técnico</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="especialidade">Especialidade:</label>
                    <input type="text" class="form-control" id="especialidade" name="especialidade">
                </div>
                <div class="form-group">
                    <label for="registro_profissional">Registro Profissional (CRM/COREN/CREFITO/CFP):</label>
                    <input type="text" class="form-control" id="registro_profissional" name="registro_profissional">
                </div>
                </fieldset>
                
                <button type="submit" class="btn btn-primary mt-3">Registrar</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
