@props([
    'values' => [],
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

            @if ($values->isEmpty())
                <tr>
                    <td colspan="5" class="px-4 py-4 text-center text-gray-700 bg-gray-100 ">
                        No data available in table
                    </td>
                </tr>
            @endif
            @foreach ($values as $value)
                <tr class="hover:bg-gray-50 border-neutral-200 border-b"
                    onclick='showSupplierDetails(this, @json($value))'>
                    <x-table-data type="data" :value="$value->id"></x-table-data>
                    <x-table-data type="data" :value="$value->company_name"></x-table-data>
                    <x-table-data type="data" :value="$value->address"></x-table-data>

                    <!-- Action buttons -->
                    <x-table-data type="action_btns" :value="$value"></x-table-data>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mt-3">
    {{ $values->onEachSide(1)->links() }}
</div>
