<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Formulário de Cadastro</title>

  <style>
    * {
      margin: 10px;
      background-color: #f1f1f1;
    }

    h1{
      color: #E9C46A;
    }

  </style>
</head>

<body>
  <h1>  Cadastro de Professor(a)</h1>
  <form class="row g-3" method="GET" action="crudprof.php"> 
    <div class="col-md-6">
      <label for="" class="form-label">Nome:</label>
      <input type="text" name="nome" class="form-control" id="inputEmail4" required placeholder="Digite seu nome completo">
    </div>

    <div class="col-md-2">
      <label for="" class="form-label">Idade:</label>
      <input type="number" name="idade" class="form-control" id="inputEmail4" required placeholder="Digite sua idade" min='18' >
     
    </div>
    
    <div class="col-md-2">
      <label for="" class="form-label">Data de nascimento:</label>
      <input type="date" name="datanascimento" class="form-control" id="inputEmail4" required>
    </div>

    <div class="col-md-5">
      <label for="" class="form-label">Endereço:</label>
      <input type="text" name="endereco" class="form-control" id="inputEmail4" required placeholder="Digite seu endereço">
    </div>

    <div class="col-md-5">
      <label for="inputState" name="status" class="form-label">Status:</label>
      <select id="inputState" class="form-select" name="status" required placeholder="Selecione">
        <option>AT</option>
        <option>NA</option>
      </select>
    </div>

    <div class="col-12">
    <center><button type="submit" class="btn btn-warning" name="cadastrar" value="cadastrar">Cadastrar</button> 
    <button class='btn'><a href='index.php'>Voltar ao Início</a></button>
    </center>

    </div>
  </form>
</body>

</html>