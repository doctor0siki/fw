<?php

use Slim\Http\Request;
use Slim\Http\Response;

// ログイン画面コントローラ
$app->get('/logout/', function (Request $request, Response $response) {

    // Destroy session
    $this->session::destroy();

    //TOPへリダイレクト
    return $response->withRedirect('/');


});
