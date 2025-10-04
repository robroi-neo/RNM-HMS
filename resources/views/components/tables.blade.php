@props([
    'suppliers' => [],
])

<div class="overflow-x-auto rounded-lg shadow">
    <table class="min-w-full text-lg text-left">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="px-4 py-4 w-40">Supplier ID</th>
                <th class="px-4 py-4">Company Name</th>
                <th class="px-4 py-4">Contact Person</th>
                <th class="px-4 py-4">Contact Number</th>
                <th class="px-4 py-4 text-center">Action Button</th>
            </tr>
        </thead>

        <tbody>
            @if (count($suppliers) === 0)
                <tr>
                    <td colspan="5" class="px-4 py-4 text-center text-gray-700 bg-gray-100 ">
                        No data available in table
                    </td>
                </tr>
            @endif
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
<div class="mt-3">
    {{ $suppliers->onEachSide(1)->links() }}
</div>
