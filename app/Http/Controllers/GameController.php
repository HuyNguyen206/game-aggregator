<?php

namespace App\Http\Controllers;

use App\IGDBService;

class GameController extends Controller
{
    public function __construct(protected IGDBService $service)
    {

    }

    public function index()
    {
        return view('home');
    }

}
