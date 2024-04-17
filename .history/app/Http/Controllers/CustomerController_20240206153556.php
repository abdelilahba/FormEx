<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of all customers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all customers from the database
        $customers = Customer::all();

        // Return a view and pass the retrieved customers to it
        // Assuming you have a view named 'customers.index'
        return view('customers.index', compact('customers'));
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            $customer->delete();
            return response()->json(['success' => true, 'message' => 'Customer deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Customer not found'], 404);
    }
}
