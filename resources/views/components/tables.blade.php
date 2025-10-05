@props([
    'suppliers' => [],
])

<div class="overflow-x-auto rounded-lg shadow">
    <table class="min-w-full text-lg text-left">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="px-4 py-4 w-60">Supplier ID</th>
                <th class="px-4 py-4 w-90">Company Name</th>
                <th class="px-4 py-4 w-90">Address</th>
                <th class="px-4 py-4 text-center justify-end"></th>
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
                <x-table-row :values="$supplier"></x-table-row>
            @endforeach

        </tbody>
    </table>
</div>
<div class="mt-3">
    {{ $suppliers->onEachSide(1)->links() }}
</div>
