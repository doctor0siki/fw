<?php

use Slim\Http\Request;
use Slim\Http\Response;



// ログインコントローラ
$app->get('/register/', function (Request $request, Response $response) {

    //GETされた内容を取得します。
    $data = $request->getQueryParams();

    // Render index view
    return $this->view->render($response, 'register/register.twig', $data);

});
