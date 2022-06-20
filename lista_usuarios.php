<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-primary mt-5">
                <div class="card-header bg-primary">
                    <div class="card-title">
                        <h4 class="text-center text-white"><strong>Detalhar usuário</strong></h4>
                    </div>
                </div>

                <div class="card-body text-black-50">

                    <form method="post" action="detalhe_usuario.php">


                        <div class="row">
                            <div class="col-md-12">
                                <label for="nome_usuario"><strong>Nome de usuário:</strong></label>
                                <input type="text" id="nome_usuario" name="nome_usuario" class="form-control">
                            </div>
                        </div>


                        <div class="row d-flex justify-content-center">
                            <div class="col-md-2 mt-3 ">
                                <button type="submit" class="btn btn-primary ml-md-4">Detalhar</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php

$nome=$_POST['nome'];

require_once('vendor/autoload.php');

use Github\Client; //Utilizando a classe client do Github

$client = new Client();

$users = $client->api('search')->users($nome); // realizando a pesquisa pelo nome

echo('Copie o usuário desejado para o campo acima para visualizar detalhes:');
echo '</br>';
foreach($users['items'] as $user)
{ 
	echo nl2br($user['login'] . PHP_EOL); //exibindo os usuários econtrados
}

?>