<?php

namespace App\Http\Controllers;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice.index');
    }

    public function create()
    {
        return view('invoice.create');
    }
}