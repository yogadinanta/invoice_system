<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');
    use App\Http\Controllers\InvoiceController;

Route::resource('invoice', InvoiceController::class);
use App\Http\Controllers\TransactionController;

Route::get('/income', [TransactionController::class, 'income'])
    ->name('transaction.income');

Route::get('/expense', [TransactionController::class, 'expense'])
    ->name('transaction.expense');
    use App\Http\Controllers\ClientController;

Route::resource('client', ClientController::class);
use App\Http\Controllers\ReportController;

Route::get('/report', [ReportController::class, 'index'])
    ->name('report.index');