<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link rel="stylesheet" href="../css/form-user.css">
</head>

<body>

    <div class="box">
        <div class="img-box">
            <img src="../image/donate.png">
        </div>
        <div class="form-box">
            <h2>Criar Conta</h2>
            <p class="seJunte">Se junte a nós</p>
            <form method="post" action="../model/Doador.php">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="txtNomeDoador" name="txtNomeDoador" placeholder="Digite seu nome" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email_doador" name="email_doador" placeholder="Digite seu e-mail" required>
                </div>

                <div class="input-group">
                    <label for="email">Data de Nascimento</label>
                    <input type="date" id="data_nascimento_doador" name="data_nascimento_doador" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha_doador" name="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group w50">
                    <label for="confirmarSenha">Confirme sua senha</label>
                    <input type="password" id="confirmarSenha" placeholder="Confirme sua senha" required>
                </div>

                <div class="input-group">
                    <button type="submit">Cadastrar</button>
                </div>
                <p class="temConta">Já tem uma conta? <a href="./login-user.php">LOGIN</a></p>
            </form>
        </div>
    </div>

</body>

</html>