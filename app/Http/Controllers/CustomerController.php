<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function index()
    {
    $this->authorize('viewAny', Customer::class);

    $customers = Customer::all();

    return response()->json($customers);
    }

    public function store(Request $request)
    { 
    $this->authorize('create', Customer::class);

    $customer = Customer::create($request->all());

    return response()->json($customer, 201);
    }

    public function show(Customer $customer)
    {
    $this->authorize('view', $customer);

    return response()->json($customer);
    }

    public function update(Request $request, Customer $customer)
    {
    $this->authorize('update', $customer);

    $customer->update($request->all());

    return response()->json($customer);
    }

    public function destroy(Customer $customer)
    {
    $this->authorize('delete', $customer);

    $customer->delete();

    return response()->json(null, 204);
    }

}
