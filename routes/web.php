<?php

use App\Jobs\SendMail;
use App\Models\Message;
use App\Models\Subscribe;
use Illuminate\Http\Request;
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
    $subrek = Subscribe::cursor();
    $message = Message::value('message');

    return view('welcome', compact('subrek', 'message'));
});

Route::post('/send-email', function (Request $request) {
    Message::find(1)->update([
        'message' => $request->message,
    ]);

    $subrekk = new SendMail($request->subscribers);
    dispatch($subrekk);

    return back();
})->name('send_email');