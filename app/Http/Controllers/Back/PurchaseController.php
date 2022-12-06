<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PurshaseTransaction;

class PurchaseController extends Controller
{
    public function index()
    {
        $transactions = PurshaseTransaction::with('product')->get();
        return view('Admin.PurshaseTransaction.index')->with('transactions', $transactions);
    }
    public function Report()
    {
        $transactions = PurshaseTransaction::groupBy('product_id')
            ->selectRaw('product_id,sum(price) as sum,count(product_id) as count')
            ->get();


        return view('Admin.PurshaseTransaction.TransactionsReport')->with('transactions', $transactions);
    }
}
