<html>

<head>
    <title>Formulário de cadastro</title>
</head>

<body>
    <center>
        <div id="formulario">
            <form name="formCad" action="" method="post">
                <input type="hidden" name="id" value="">
                <label>Nome: </label>
                <input type="text" name="nome" required="required" value=""><br>

                <label>E-mail: </label>
                <input type="text" name="email" required="required" value=""><br>

                <label>Senha: </label>
                <input type="password" name="senha" required="required" value=""><br>

                <input type="submit" name="btnCadastrar" , value="Cadastrar">
            </form>
        </div>
</body>

<body>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Douglas
                </td>
                <td>
                    drmsugano@gmail.com
                </td>
                <td>
                    <button type="button">Editar</button>
                    <button type="button">Excluir</button>
                </td>
            </tr>
        </tbody>
    </table>
    </center>
</body>

</html>