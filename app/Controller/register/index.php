<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Model\Dao\User;


// 会員登録ページコントローラ
$app->get('/register/', function (Request $request, Response $response) {

    //GETされた内容を取得します。
    $data = $request->getQueryParams();

    // Render index view
    return $this->view->render($response, 'register/register.twig', $data);

});

// 会員登録処理コントローラ
$app->post('/register/', function (Request $request, Response $response) {

    //POSTされた内容を取得します
    $data = $request->getParsedBody();

    //ユーザーDAOをインスタンス化
    $user = new User($this->db);

    //DBのカラムに無いものは削除
    unset($data["password_re"]);

    //DBに登録をする。戻り値は主キーのID
    $id = $user->insert($data);

    // Render index view
    return $this->view->render($response, 'register/register_done.twig', $data);

});
