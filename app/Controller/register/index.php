<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Model\Dao\User;


// ログインコントローラ
$app->get('/register/', function (Request $request, Response $response) {

    //GETされた内容を取得します。
    $data = $request->getQueryParams();

    // Render index view
    return $this->view->render($response, 'register/register.twig', $data);

});

// ログインコントローラ
$app->post('/register/', function (Request $request, Response $response) {

    //POSTされた内容を取得します
    $data = $request->getParsedBody();

    var_dump($this->db);

    //ユーザーDAOをインスタンス化
    $user = new User($this->db);




    // Render index view
    return $this->view->render($response, 'register/register_done.twig', $data);

});
