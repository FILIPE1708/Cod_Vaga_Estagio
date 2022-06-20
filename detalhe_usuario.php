<?php

$nome=$_POST['nome_usuario'];

require_once('vendor/autoload.php');

use Github\Client;

$client = new Client();

$user = $client->api('user')->show($nome); //retorna um usuário em especifico de acordo com o seu username

echo('Nome: ');
echo ($user['name']);
echo '</br>';

echo('Usuário: ');
echo ($user['login']);
echo '</br>';

echo('Repositórios públicos: ');
echo($user['public_repos']);
echo '</br>';
echo '</br>';

$repositories = $client->api('user')->repositories($nome); //retorna os repositorios do usuário

echo('Repositórios:');
echo '</br>';
foreach($repositories as $repository)
{ 
	echo nl2br($repository['full_name'] . PHP_EOL); //exibindo os nomes dos repositórios
}

?>