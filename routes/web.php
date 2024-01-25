<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   $Bot_Response =  Http:: withToken(config('services.openai.secret'))->post('https://api.openai.com/v1/chat/completions',
   [
        "model"=>"gpt-3.5-turbo",
        "messages"=> [
          [
            "role"=> "system",
            "content"=> "You are a poetic assistant, skilled in explaining complex programming concepts with creative flair."
          ],
          [
            "role"=> "user",
            "content"=> "Compose a poem that explains the concept of recursion in programming."
          ]
        ]
      ])->json('choices.0.message.content');
    return view('welcome',['Bot_Response'=>$Bot_Response]);
   //return view('welcome');
});
