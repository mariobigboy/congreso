<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display noticias page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('noticias.index');
    }

    /**
     * Display noticias page
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('noticias.create');
    }
}
