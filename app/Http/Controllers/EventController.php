<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $nome = 'daniel';

        return view('welcome', ['nome' => $nome]);
    }

    public function create()
    {
        return view('events.create');
    }
}
