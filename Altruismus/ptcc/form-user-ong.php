<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link rel="stylesheet" href="./css/form-user.css">
</head>

<body>

    <div class="box">
        <div class="img-box">
            <img src="./image/donate.png">
        </div>
        <div class="form-box">
            <h2>Criar Conta</h2>
            <p class="seJunte">Se junte a nós</p>
            <form method="post" action="./restrita/cadastra-ong.php">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="txtNomeOng" name="txtNomeOng" placeholder="Nome da ONG" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="txtEmailOng" name="txtEmailOng" placeholder="E-mail da ONG" required>
                </div>

                <div class="input-group w50">
                    <label for="data">Data de Fundação</label>
                    <input type="date" id="txtDataNascOng" name="txtDataNascOng" placeholder="Fundação da ONG" required>
                </div>

                <div class="input-group w50">
                    <label for="lugradouro">Lugradouro</label>
                    <input type="text" id="txtLugradouroOng" name="txtLugradouroOng" placeholder="Fundação da ONG" required>
                </div>

                <div class="input-group w50">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="txtCidadeOng" name="txtCidadeOng" placeholder="Digite sua cidade" required>
                </div>

                <div class="input-group w50">
                    <label for="estado">Estado</label>
                    <input type="text" id="txtEstadoOng" name="txtEstadoOng" placeholder="Digite seu estado" required>
                </div>

                <div class="input-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="txtBairroOng" name="txtBairroOng" placeholder="Digite seu bairro" required>
                </div>

                <div class="input-group">
                    <label for="rua">Rua</label>
                    <input type="text" id="txtRuaOng" name="txtRuaOng" placeholder="Digite sua rua" required>
                </div>

                <div class="input-group w50">
                    <label for="numero">Número</label>
                    <input type="number" id="txtComplementoOng" name="txtComplementoOng" placeholder="Digite seu número de casa" required>
                </div>

                <div class="input-group w50">
                    <label for="cep">CEP</label>
                    <input type="text" id="txtCepOng" name="txtCepOng" placeholder="Digite seu CEP" required>
                </div>

                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="txtSenhaOng" name="txtSenhaOng" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group">
                    <button type="submit"><a href="../restrict/ong-restrita.php">Cadastrar</a></button>
                </div>
                <p class="temConta">Já tem uma conta? <a href="login-user.php">LOGIN</a></p>
            </form>
        </div>
    </div>

</body>

</html>