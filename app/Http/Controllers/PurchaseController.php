<?php

// app/Http/Controllers/PurchaseController.php
// app/Http/Controllers/PurchaseController.php

// app/Http/Controllers/PurchaseController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function showPurchase()
    {
        return view('purchase');
    }

    public function processPurchase(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'national_id' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        // Use a try-catch block to handle exceptions
        try {
            Purchase::create($validatedData);
        } catch (\Exception $e) {
            // Log the error or customize the response
            return redirect()->route('purchase')->withErrors(['error' => 'Failed to process purchase. Please try again.']);
        }

        // Redirect to a success page or perform other actions
        return redirect()->route('purchase')->with('message', 'Purchase successful!');
    }
}
