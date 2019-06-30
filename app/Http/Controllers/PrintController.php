<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
class PrintController extends Controller
{
    public function index()
    {
          $transaction = Payment::all();
          return view('bill')->with('transaction', $transaction);;
    }
    public function prnpriview($id)
    {
          $transaction = Payment::findorFail($id);
          return view('billpreview')->with('transaction', $transaction);;
    }
}
