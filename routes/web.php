<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('hello/{msg}', function ($msg) {
    $html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt;color:#999;}
h1{ font-sixe:100pt;text-align:right;color:#eee
    margin:-40px 0px -50px 0px;}
</style>
</head>
<body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これはサンプルで作ったページです。</p>
</body>
</html>
EOF;
return $html;
});
Route::get('/', function () {
    return view('welcome');
});
