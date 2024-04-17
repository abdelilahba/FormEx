<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Invoice as ModelsInvoice;

class listeController extends Controller
{
    public function listCustomers()
    {
        // Retrieve all customers from the database
        $customers = Customer::with(['invoice' => function($query) {
            $query->orderBy('date', 'desc'); // Assuming you have a 'date' column in your invoices
        }])->get();
    
        return response()->json(['data' => $customers]);
    }
    public function listPayement()
    {
        // Retrieve all customers from the database
        $payements = Payment::with(['Invoice', 'Customer'])->get();

        // Return a view and pass the retrieved customers to it
        // Assuming you have a view named 'customers.index'
        return response()->json(
            [
            'data' => $payements,
        ]);
    }
    public function listInvoice()
    {
        // Retrieve all customers from the database
        $invoices = ModelsInvoice::with('Customer')->get();

        // Return a view and pass the retrieved customers to it
        // Assuming you have a view named 'customers.index'
        return response()->json([
            'data' => $invoices,
        ]);
    }
}
