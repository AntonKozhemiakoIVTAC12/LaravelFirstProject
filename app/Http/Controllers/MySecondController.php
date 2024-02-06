<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MySecondController extends Controller
{
    public function index()
    {
        $message = message::query()->find(1);
        dump($message->messages);
        dump($message->is_reading);
        dump($message->not_reading);
        dump($message->dataTime);
    }
}
