<?php

namespace App\Http\Controllers;

use App\Models\Pocketcard;
use Illuminate\Http\Request;

class PocketcardController extends Controller
{
    public function index()
    {
        $pocketcards = Pocketcard::with('user')
            ->latest()
            ->take(50)
            ->get();

        return view('home', ['pocketcards' => $pocketcards]);
    }
}