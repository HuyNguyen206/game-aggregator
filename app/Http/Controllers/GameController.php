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

    public function show($slug, IGDBService $service)
    {
        $game = $service->getGameBySlug($slug)->first();

        dump($game);

        return view('show', compact('game'));
    }

}
