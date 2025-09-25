<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PocketcardController extends Controller
{

    public function index()
    {
        $pocketcards = [
            [
                'author' => 'Jane Doe',
                'message' => 'Just deployed my first Laravel app! 🚀',
                'time' => '5 minutes ago'
            ],
            [
                'author' => 'John Smith',
                'message' => 'Laravel makes web development fun again!',
                'time' => '1 hour ago'
            ],
            [
                'author' => 'Alice Johnson',
                'message' => 'Working on something cool with Pocketcarder...',
                'time' => '3 hours ago'
            ],
            [
                'author' => 'Bjorno King',
                'message' => 'Working on something cool with Pocketcarder...',
                'time' => '12 hours ago'
            ]
        ];

        return view('home', ['pocketcards' => $pocketcards]);
    }
}
