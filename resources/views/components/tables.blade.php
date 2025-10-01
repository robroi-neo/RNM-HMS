<div class="overflow-x-auto rounded-lg shadow">
    <table class="min-w-full text-sm text-left ">
        <thead class="bg-gray-200 text-gray-700 ">
            <tr>
                <th class="px-4 py-2">Supplier ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Address</th>
                <th class="px-4 py-2 text-center">Actions</th>
            </tr>
        </thead>

        <tbody>
            {{-- <x-table-row :values="[$supplier->id, $supplier->name, $supplier->address]"></x-table-row> --}}
            <x-table-row :values="['1', 'Robroi', 'Main Street']"></x-table-row>
        </tbody>
    </table>
</div>
