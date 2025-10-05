<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('supplier.index', [
            'heading' => 'Supplier Records',
            'suppliers' => Supplier::orderBy('id', 'desc')->paginate(8),
        ]);
    }
    public function store(Request $request)
    {
        
        // Validate
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
        ]);
        // Save to DB later
        Supplier::create($validated);

        return redirect('/supplier')->with('success', 'Supplier created!');
    }
}
