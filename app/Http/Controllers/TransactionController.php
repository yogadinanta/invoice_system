<?php

namespace App\Http\Controllers;

class TransactionController extends Controller
{
    public function income()
    {
        return view('transaction.income');
    }

    public function expense()
    {
        return view('transaction.expense');
    }
}