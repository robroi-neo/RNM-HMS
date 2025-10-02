<div class="overflow-x-auto rounded-lg shadow">
    <table class="min-w-full text-sm text-left ">
        <thead class="bg-gray-200 text-gray-500 text-xl">
            <tr>
                <th class="px-4 py-4 w-65">Supplier ID</th>
                <th class="px-4 py-4">Name</th>
                <th class="px-4 py-4">Address</th>
                <th class="px-4 py-4 text-center"></th>
            </tr>
        </thead>

        <tbody>
            {{-- <x-table-row :values="[$supplier->id, $supplier->name, $supplier->address]"></x-table-row> --}}
            <x-table-row :values="['1', 'Robroi Neo M. Dingal', 'Zapote St. General Santos City']"></x-table-row>
            <x-table-row :values="['2', 'Robroi Neo M. Dingal', 'Zapote St. General Santos City']"></x-table-row>
            <x-table-row :values="['3', 'Robroi Neo M. Dingal', 'Zapote St. General Santos City']"></x-table-row>
            <x-table-row :values="['4', 'Robroi Neo M. Dingal', 'Zapote St. General Santos City']"></x-table-row>
            <x-table-row :values="['5', 'Robroi Neo M. Dingal', 'Zapote St. General Santos City']"></x-table-row>
            <x-table-row :values="['6', 'Robroi Neo M. Dingal', 'Zapote St. General Santos City']"></x-table-row>
            <x-table-row :values="['7', 'Robroi Neo M. Dingal', 'Zapote St. General Santos City']"></x-table-row>
            <x-table-row :values="['8', 'Robroi Neo M. Dingal', 'Zapote St. General Santos City']"></x-table-row>
        </tbody>
    </table>
</div>
