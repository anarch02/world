<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    const SIDEBAR = [
        [
            'route' => 'home',
            'title' => 'home',
        ],
        [
            'route' => 'blog',
            'title' => 'blog',
        ],
        [
            'route' => 'contact',
            'title' => 'contact',
        ]
    ];
}
