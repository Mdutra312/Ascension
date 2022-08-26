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
            <form method="post" action="../restrita/cadastra-doador.php">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="txtNomeDoador" name="txtNomeDoador" placeholder="Digite seu nome" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="txtEmailDoador" name="txtEmailDoador" placeholder="Digite seu e-mail" required>
                </div>

                <div class="input-group w50">
                    <label for="data">Data de Nascimento</label>
                    <input type="date" id="txtDataNascDoador" name="txtDataNascDoador" required>
                </div>

                <div class="input-group w50">
                    <label for="lugradouro">Lugradouro</label>
                    <input type="text" id="txtLugradouroDoador" name="txtLugradouroDoador" placeholder="Digite seu Lugradouro" required>
                </div>

                <div class="input-group w50">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="txtCidadeDoador" name="txtCidadeDoador" placeholder="Digite sua cidade" required>
                </div>

                <div class="input-group w50">
                    <label for="estado">Estado</label>
                    <input type="text" id="txtEstadoDoador" name="txtEstadoDoador" placeholder="Digite seu estado" required>
                </div>

                <div class="input-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="txtBairroDoador" name="txtBairroDoador" placeholder="Digite seu bairro" required>
                </div>

                <div class="input-group">
                    <label for="rua">Rua</label>
                    <input type="text" id="txtRuaDoador" name="txtRuaDoador" placeholder="Digite sua rua" required>
                </div>

                <div class="input-group w50">
                    <label for="numero">Número</label>
                    <input type="number" id="txtComplementoDoador" name="txtComplementoDoador" placeholder="Digite seu número de casa" required>
                </div>

                <div class="input-group w50">
                    <label for="cep">CEP</label>
                    <input type="text" id="txtCepDoador" name="txtCepDoador" placeholder="Digite seu CEP" required>
                </div>

                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="txtSenhaDoador" name="txtSenhaDoador" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group">
                    <button type="submit"><a href="../restrict/doador-restrita.php">Cadastrar</a></button>
                </div>
                <p class="temConta">Já tem uma conta? <a href="login-user.php">LOGIN</a></p>
            </form>
        </div>
    </div>

</body>

</html>