<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Model\Dao\User;

// ログイン画面コントローラ
$app->get('/login/', function (Request $request, Response $response) {

    //GETされた内容を取得します。
    $data = $request->getQueryParams();

    // Render index view
    return $this->view->render($response, 'login/login.twig', $data);

});

// ログインロジックコントローラ
$app->post('/login/', function (Request $request, Response $response) {

    //POSTされた内容を取得します
    $data = $request->getParsedBody();

    //ユーザーDAOをインスタンス化
    $user = new User($this->db);

    $param["email"] = $data["email"];
    $param["password"] = $data["email"];

    //入力された情報から会員情報を取得
    $result = $user->select($param, "", "", 1);

    var_dump($result);


    // Render index view
    return $this->view->render($response, 'login/login.twig', $data);

});
