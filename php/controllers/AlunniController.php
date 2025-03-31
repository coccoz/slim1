<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AlunniController
{
  public function index(Request $request, Response $response, $args){
    $mysqli_connection = new MySQLi('my_mariadb', 'root', 'ciccio', 'scuola');
    $result = $mysqli_connection->query("SELECT * FROM alunni");
    $results = $result->fetch_all(MYSQLI_ASSOC);

    $response->getBody()->write(json_encode($results));
    return $response->withHeader("Content-type", "application/json")->withStatus(200);
  }
}

public function create(Request $request, Response $response, $args){

  $body = json_decode($request->getBody()->getContents(), true);
  $nome = $body["nome"];
  $cognome = $body["cognome"];

  //inserisco nel db

  $response-getBody()->write(json_encode(array("message"=> "Succes")));
  return $response-> withHeader("Content-type", "application/json")-withStatus(201);

}
