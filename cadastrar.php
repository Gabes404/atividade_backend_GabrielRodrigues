<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova ordem de serviço</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
<div class = "container">
    <h1>nova ordem de serviço</h1>


    <form action="salvar.php" method="post">


    <label>Cliente</label>
    <input type="text" name="cliente" required>

    <label>equipamento</label>
    <input type="text" name="equipamento" required>

    <label>peoblema apresentado</label>
    <input type="text" name="problema" required>

    <label>data de entrada</label>
    <input type="date" name="data_entrada" required>

    <label>status</label>
    <select name="status">
    <option value="recebido">recebido</option>
    <option value="em analise">em analise</option>
    <option value="em manutencao">em manutencao</option>
    <option value="concluido">concluido</option>

    </select>
    <button type="submit"> cadastrar ordem</button>
    </form>

    <a href="index.php">voltar</a>

</div>
</body>
</html>