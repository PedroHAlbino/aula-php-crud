<?php
require 'hearder.php';
?>
<h1>Todos os Produtos</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço de compra</th>
      <th scope="col">Preço de venda</th>
      <th scope="col">Estoque</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Arroz</td>
      <td>3.50</td>
      <td>8.00</td>
      <td>150</td>

      <td>
         <a class="btn btn-outline-danger" href="#" role="button">Excluir</a>
         <a class="btn btn-outline-success" href="editar.php" role="button">Editar</a>
      </td>
    </tr>
  </tbody>
</table>


<?php
require 'footer.php';
?>

