<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CustomerController extends Controller
{
    public function view()
{

    // Logic to retrieve and display a list of resources
    // $resources = Customer::all();
    $resources = Customer::orderBy('updated_at', 'ASC')->get();

    return view('index', ['resources' => $resources]);
}


public function create(Request $request)
{
    // $customer=Customer::query()->orderBy('updated_at', 'DESC')->get();
    $customer = Customer::get();

    return view('create', compact("customer"));
}

public function store(Request $request)
{

   $info= $request->validate([
        'customer_name' => 'required',
        'customer_email' => 'required|email',
        'address' => 'required',
    ]);

    // $customer = new Customer();
    // $customer->customer_name = $request->input('customer_name');
    // $customer->customer_email = $request->input('customer_email');
    // $customer->customer_address = $request->input('address');
    // $customer->password = $request->input('password');
    // $customer->save();

    $customer = Customer::create([
     'customer_name' => $request->input('customer_name'),
     'customer_email' => $request->input('customer_email'),
     'customer_address' => $request->input('address'),
     'password' => $request->input('password'),
    ]);

    // Redirect to a success page or return a response
    return redirect()->route('customers.show', $customer->id)->with('success', 'You have added customer ');
   
    // Logic to store a newly created resource in the database

    // return redirect()->route('resources.create');
}

public function index(){

   

 $customers = Customer::orderBy('updated_at', 'DESC')->get();


   return view('index', ["customers"=> $customers]);

}

public function show($id)
{
    $item = Customer::find($id);
    return view('show', compact('item'));

}

public function edit(Request $request, $id)
{
    $item = Customer::findOrFail($id);
    return view('edit',  compact('item'));
}

public function update(Request $request, $id)
{
    try {
        // Find the customer record by its ID
        $customer = Customer::find($id);

        // Check if the customer record exists
        if (!$customer) {
            // If the customer record does not exist, redirect back with an error message
            return redirect()->route('resources.index')->with('error', 'Customer not found.');
        }

        // Validate the incoming request data
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email',
            'customer_address' => 'required|string|max:255',
        ]);

        // Update the customer record with the validated data
        $customer->update($validatedData);
        // dd($validatedData);

        // Redirect back to the index page with a success message
        return redirect()->route('resources.view')->with('success', 'Customer updated successfully.');
    } catch (\Throwable $th) {
        dd($th);
        // If an exception occurs, catch it and redirect back with an error message
        return redirect()->route('resources.view')->with('error', 'An error occurred while updating the customer.');
    }
}


// public function update(Request $request, $id)
// {
//     try {
  
//          // Logic to update a specific resource in the database
//     $resource = Customer::find($id);
//     $input = $request->all();
//     $customer = Customer::find($id);

//     dd($resource);
//     $customer->update($input);


//     // $resource->update($request->all());
//     return redirect()->route('resources.index');
//     } catch (\Throwable $th) {
//         dd($th);
    
   
       
        // return redirect('contact')->with('flash_message', 'Contact Updated!');  



public function destroy($id)
{

    // Logic to delete a specific resource from the database
    $resource = Customer::findOrFail($id);
    $resource->delete();
    return redirect()->route('resources.view');
}
}

    

        // Validate the incoming request data
        

        // Create a new customer record in the database
       
    







