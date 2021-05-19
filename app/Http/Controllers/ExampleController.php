<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ExampleEvent;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        $message = $request->get('message');
        event(new ExampleEvent($message));

        return view('index')->with(compact('message'));
    }
}
