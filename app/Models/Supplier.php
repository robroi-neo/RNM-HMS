<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Supplier
{

    public static function all(): array
    {
        return [
            [
                'id' => '1',
                'name' => 'Robroi Neo M. Dingal',
                'address' => '012, Zapote St. General Santos City',
            ],
            [
                'id' => '1',
                'name' => 'Robroi Neo M. Dingal',
                'address' => '012, Zapote St. General Santos City',
            ],
            [
                'id' => '1',
                'name' => 'Robroi Neo M. Dingal',
                'address' => '012, Zapote St. General Santos City',
            ],
            [
                'id' => '1',
                'name' => 'Robroi Neo M. Dingal',
                'address' => '012, Zapote St. General Santos City',
            ],

        ];
    }

    public static function find(int $id): array
    {
        return Arr::first(Supplier::all(), fn($supplier) => $supplier['id'] === $id );
    }
}

