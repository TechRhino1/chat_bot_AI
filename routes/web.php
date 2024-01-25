<?php
use App\AI\Chat;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
$chat = new Chat();
 $Bot_Response = $chat
       ->systemMesssage('You are a poetic assistant, skilled in explaining complex programming concepts with creative flair.')
       ->send('Compose a poem that explains the concept of recursion in programming.');
  $secondMessage = $chat->reply('make it much more simple than it is.');
     
    return view('welcome',['Bot_Response'=>$secondMessage]);

});
