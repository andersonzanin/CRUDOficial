<?php
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h4>Listar Usuários</h4>   
        </div>
    <div>
        <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
         data-bs-target="#cadUsuarioModal">
         Cadastrar
        </button>
</div>
    </div>
    <hr>
    <div class="row">
    <div class="col-lg-12">
    
        <span class="listar-usuarios"></span>
                
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="cadUsuarioModal" tabindex="-1" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="cadUsuarioModalLabel">Cadastrar Usuário</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form id="cad-usuario-form">
          <div class="mb-3">
            <label for="nome" class="col-form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome completo" required>
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">E-mail:</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
          </div>
          <div class="mb-3">
            <label for="datan" class="col-form-label">Data de nascimento:</label>
            <input type="text" name="datan" class="form-control" id="datan" placeholder="Digite sua data de nascimento" required>
          </div>
          <div class="mb-3">
            <label for="endereco" class="col-form-label">Endereço:</label>
            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Digite seu endereço" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-outline-success btn-sm" id="cad-usuario-btn" value="Cadastrar" />
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" 
crossorigin="anonymous"></script> 
<script src="js/custom.js"></script>

</body>

</html>