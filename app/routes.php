<?php


$router->get('', 'PagesController@home');

$router->get('forum', 'PagesController@forum');



$router->get('comments', 'CommentsController@index');

$router->post('comments', 'CommentsController@store');




