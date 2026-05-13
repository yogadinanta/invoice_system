<?php

namespace App\Http\Controllers;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function create()
    {
        return view('client.create');
    }
}