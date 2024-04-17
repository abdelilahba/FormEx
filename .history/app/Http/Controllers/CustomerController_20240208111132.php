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
    public function deleteSelected(Request $request)
{
    $ids = $request->input('ids', []);
    // Perform deletion, e.g., using Eloquent
    Customer::whereIn('id', $ids)->delete();

    return response()->json(['success' => true, 'message' => 'Selected customers deleted successfully.']);
}
public function getCustomer($id)
{
    $customer = Customer::find($id);

    if ($customer) {
        return response()->json([
            'success' => true,
            'data' => $customer,
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Customer not found',
        ], 404);
    }
}
public function update(Request $request, $id)
    {
 

        $customer = Customer::findOrFail($id);

        $customer->company_name = $request->companyName;
        $customer->last_name = $request->last_name;
        $customer->first_name = $request->first_name;
        $customer->email = $request->email;
    
        $customer->phone_number = $request->phone_number;
        // Update other fields as necessary

        $customer->save();

        return response()->json([
            'success' => true,
            'message' => 'Customer updated successfully!',
            'data' => $customer
        ]);
    }
    public function getCustomerId($id){
      
            $customer = Customer::find($id);
            if ($customer) {
                return view('details.detailsCustomer', compact('customer'));
            } else {
                abort(404); // Or handle the "not found" case as you prefer
            }
       
    }

}
