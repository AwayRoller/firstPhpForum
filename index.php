<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 12:07
 */

require 'vendor/autoload.php';

require 'core/bootstrap.php';


use App\Core\{Router, Request};






Router::load('app/routes.php')

        ->direct(Request::uri(), Request::method());




