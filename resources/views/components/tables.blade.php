@props([
    'suppliers' => [],
])

<div class="overflow-x-auto rounded-lg shadow">
    <table class="min-w-full text-sm text-left">
        <thead class="bg-gray-200 text-gray-700 text-lg">
            <tr>
                <th class="px-4 py-4 w-40">Supplier ID</th>
                <th class="px-4 py-4">Company Name</th>
                <th class="px-4 py-4">Contact Person</th>
                <th class="px-4 py-4">Contact</th>
                <th class="px-4 py-4 text-center">Action Button</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($suppliers as $supplier)
                <x-table-row :values="[
                    $supplier['id'],
                    $supplier['CompanyName'],
                    $supplier['ContactPerson'],
                    $supplier['ContactNumber'],
                ]"></x-table-row>
            @endforeach

        </tbody>
    </table>
</div>
<div class="my-5 bg-white text-gray-800">
    {{ $suppliers->onEachSide(1)->links() }}
</div>
