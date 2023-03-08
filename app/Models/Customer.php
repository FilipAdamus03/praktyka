<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customer;
    
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }
    
    public function index()
    {
        $customers = $this->customer->all();
        return response()->json($customers);
    }
    
    public function show($id)
    {
        $customer = $this->customer->find($id);
        return response()->json($customer);
    }
    
    public function store(Request $request)
    {
        $customer = $this->customer->create($request->all());
        return response()->json($customer, 201);
    }
    
    public function update(Request $request, $id)
    {
        $customer = $this->customer->find($id);
        $customer->update($request->all());
        return response()->json($customer);
    }
    
    public function destroy($id)
    {
        $this->customer->delete($id);
        return response()->json(null, 204);
    }
}

