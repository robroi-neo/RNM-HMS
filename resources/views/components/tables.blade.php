@props([
    'suppliers' => [],
])

<div class="overflow-x-auto rounded-lg shadow">
    <table class="min-w-full text-sm text-left">
        <thead class="bg-gray-200 text-gray-700 text-xl">
            <tr>
                <th class="px-4 py-4 w-65">Supplier ID</th>
                <th class="px-4 py-4">Company Name</th>
                <th class="px-4 py-4">Company Address</th>
                <th class="px-4 py-4 text-center"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($suppliers as $supplier)
                <x-table-row :values="[$supplier['id'], $supplier['CompanyName'], $supplier['CompanyAddress']]"></x-table-row>
            @endforeach

        </tbody>
    </table>
</div>
