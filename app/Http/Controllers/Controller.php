<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Customer;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(Customer $customer)
    {
        $this->authorize('view', $customer);

        return view('customers.show', compact('customer'));
    }
}
