<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        // Get search term from query string (?search=...)
        $search = $request->input('search');

        // Build query
        $suppliers = Supplier::query()
            ->when($search, function ($query, $search) {
                $lowerSearch = strtolower($search);

                $query->whereRaw('LOWER(company_name) LIKE ?', ["%{$lowerSearch}%"])
                    ->orWhereRaw('LOWER(contact_person) LIKE ?', ["%{$lowerSearch}%"]);
            })

            ->orderBy('id', 'desc')
            ->paginate(8);

        // Keep the search term in pagination links
        $suppliers->appends(['search' => $search]);

        // Return view
        return view('supplier.index', [
            'heading' => 'Supplier Records',
            'suppliers' => $suppliers,
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
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $supplier = Supplier::find($id);

        if (!$supplier) {
            return response()->json(['error' => 'Supplier not found'], 404);
        }

        $supplier->delete();

        return response()->json(['success' => true]);
    }

    public function patch(Request $request, $id)
    {
        // validate
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
        ]);

        // update supplier
        $supplier = Supplier::findOrFail($id);
        $supplier->update([
            "company_name" => request('company_name'),
            "address" => request('address'),
            "contact_person" => request('contact_person'),
            "contact_number" => \request('contact_number'),
        ]);
        $supplier->save();

        return redirect('/supplier');
    }
}
