




<body>
    <?php
    {
 $sql = "inser into aluos(nome,cidade,estado)
         VALUES (:nome, :cidade, :estado)";
 
  $result = $conexao->prepare($sql);
  $result->binValue(":nome",$nome);
  $result->binValue(":nome",$cidade);
  $result->binValue(":estado",$estado);
  $result->execute();

        echo "<p>Aluno cadastrado com sucesso!</p>";
    }









</body>