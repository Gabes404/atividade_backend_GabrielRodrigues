<?php
    include "conexao.php"

    $id = intval($_GET["id"]) 

    $sql = "SELECT * FROM ordens_servico WHERE
    id = ?";
    
    $stmt = $conexao->prepare($sql);
    $stmt ->bind_param("i", $id);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $ordem = $resultado->fetch_assoc();
    
    
    
?>                 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar ordem</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container">
        <h1>editar ordem de servico</h1>
        <form action="atualizar.php" method ="POST">
            <input type="hidden" name="id" value="<?php echo $ordem["id"];?>"
            required
        >
        <label>Cliente</label>
        <input 
        type= "text"
        name= "cliente"
        value="<?php echo htmlspecialchars($ordem["cliente"]);?>"
        required
    >

        <label>Equipamento</label>
        <input 
        type= "text"
        name= "equipamento"
        value="<?php echo htmlspecialchars($ordem["equipamento"]);?>"
        required
    >
    <label>Problema</label>
       <textarea name="problema" required>
        <?php echo  htmlspecialchars($ordem["problema"]);?>"
</textarea>
<label>data de entrega</label>
<input 
type ="date"
name="data_entrada"
value="<?php echo $ordem["equipamento"];?>"
required
>
<label>Status</label>
<select name="status">
<option value="recebido">recebido</option>
<option value="em analise">em analise</option>
<option value="em manutencao">em manutencao</option>
<option value="concluido">concluido</option>

</select>
<button type="submit">atualizar</button>


        </form>
    </div>
    
</body>
</html>                                                