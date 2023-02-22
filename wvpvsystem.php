<!DOCTYPE html>
<html>
<head>
  <title>tab</title>
  <style>
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
th {
  background-color: #4CAF50;
  color: white;
}
.cor_sim {
  background-color: #f2f2f2;
}
.cor_nao {
  background-color: #ddd;
}
</style>
</head>
<body>
  <header>
    <h1 style="text-align: center;";>PREÇOS PARA OS CONVÊNIOS</h1>
  </header>
  <main>
    <div class="passos">
      <div class="passo">
        <p>     
        <?php
$host = 'localhost'; // Endereço do servidor do banco de dados
$dbname = 'meu_banco_de_dados'; // Nome do banco de dados
$username = 'root'; // Nome do usuário do banco de dados
$password = ''; // Senha do usuário do banco de dados

try {
  $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
  // Executa uma consulta
  $resultados = $pdo->query('SELECT * FROM cursos_graduacao');
  // Itera sobre os resultados
  echo "<table>";
  echo "<tr><th>Nome do Curso </th><th>Plano de Pagamento</th><th>Mensalidade</th><th>Desconto</th><th>Valor da Mensalidade c/ desconto</th><th>Valor do Semestre c/ desconto</th><th>Pontualidade 10%</th><th>Forma de Pagamento</th></tr>";
  $i = 0;
  foreach ($resultados as $row) {
      // Faça algo com os dados do banco de dados
      $cor = $i % 2 == 0 ? "cor_sim" : "cor_nao";
      echo "<tr class=\"$cor\">";
      echo "<td>" . $row['nome'] . "</td>";
      echo "<td>" . $row['plano_pagamento']  . "</td>";
      echo "<td>" . $row['mensalidade'] . "</td>";
      echo "<td>" . $row['desconto'] . "</td>";
      echo "<td>" . $row['valor_mensalidade_desconto'] . "</td>";
      echo "<td>" . $row['valor_semestre_desconto'] . "</td>";
      echo "<td>" . $row['pontualidade'] . "</td>";
      echo "<td>" . $row['forma_pagamento'] . "</td>";
      echo "</tr>";
      $i++;
  }
  
  echo "</table>";
} catch (PDOException $e) {
  // Em caso de erro, exibe uma mensagem de erro
  die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
<br>
        <?php

try {
  $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
  // Executa uma consulta
  $resultados = $pdo->query('SELECT * FROM cursos_graduacao_col2');
  // Itera sobre os resultados
  echo "<table>";
  echo "<tr><th>Nome do Curso </th><th>Plano de Pagamento</th><th>Mensalidade</th><th>Desconto</th><th>Valor da Mensalidade c/ desconto</th><th>Valor do Semestre c/ desconto</th><th>Pontualidade 10%</th><th>Forma de Pagamento</th></tr>";
  $i = 0;
  foreach ($resultados as $row) {
      // Faça algo com os dados do banco de dados
      $cor = $i % 2 == 0 ? "cor_sim" : "cor_nao";
      echo "<tr class=\"$cor\">";
      echo "<td>" . $row['nome'] . "</td>";
      echo "<td>" . $row['plano_pagamento']  . "</td>";
      echo "<td>" . $row['mensalidade'] . "</td>";
      echo "<td>" . $row['desconto'] . "</td>";
      echo "<td>" . $row['valor_mensalidade_desconto'] . "</td>";
      echo "<td>" . $row['valor_semestre_desconto'] . "</td>";
      echo "<td>" . $row['pontualidade'] . "</td>";
      echo "<td>" . $row['forma_pagamento'] . "</td>";
      echo "</tr>";
      $i++;
  }
  
  echo "</table>";
} catch (PDOException $e) {
  // Em caso de erro, exibe uma mensagem de erro
  die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
<br>
        <?php

try {
  $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
  // Executa uma consulta
  $resultados = $pdo->query('SELECT * FROM cursos_graduacao_col3');
  // Itera sobre os resultados
  echo "<table>";
  echo "<tr><th>Nome do Curso </th><th>Plano de Pagamento</th><th>Mensalidade</th><th>Desconto</th><th>Valor da Mensalidade c/ desconto</th><th>Valor do Semestre c/ desconto</th><th>Pontualidade 10%</th><th>Forma de Pagamento</th></tr>";
  $i = 0;
  foreach ($resultados as $row) {
      // Faça algo com os dados do banco de dados
      $cor = $i % 2 == 0 ? "cor_sim" : "cor_nao";
      echo "<tr class=\"$cor\">";
      echo "<td>" . $row['nome'] . "</td>";
      echo "<td>" . $row['plano_pagamento']  . "</td>";
      echo "<td>" . $row['mensalidade'] . "</td>";
      echo "<td>" . $row['desconto'] . "</td>";
      echo "<td>" . $row['valor_mensalidade_desconto'] . "</td>";
      echo "<td>" . $row['valor_semestre_desconto'] . "</td>";
      echo "<td>" . $row['pontualidade'] . "</td>";
      echo "<td>" . $row['forma_pagamento'] . "</td>";
      echo "</tr>";
      $i++;
  }
  
  echo "</table>";
} catch (PDOException $e) {
  // Em caso de erro, exibe uma mensagem de erro
  die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
</p>

    </div>
  </main>
</body>
</html>
