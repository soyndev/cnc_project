<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            ['name' => 'Head diameter', 'values' =>[
                ['name' => '100mm'],
                ['name' => '115mm'],
                ['name' => '120mm'],
                ['name' => '125mm'],
                ['name' => '130mm'],
            ]],
            ['name' => 'Working area', 'values' =>[
                ['name' => '1300x2500'],
                ['name' => '2000x4000'],
            ]],
            ['name' => 'Working area bit', 'values' =>[
                ['name' => '750mm'],
                ['name' => '900mm'],
            ]],
            ['name' => 'Bottom diameter', 'values' =>[
                ['name' => '60mm'],
                ['name' => '110mm'],
                ['name' => '115mm'],
                ['name' => '120mm'],
                ['name' => '125mm'],
            ]],
            ['name' => 'Bottom zone', 'values' =>[
                ['name' => '75mm'],
                ['name' => '100mm'],
                ['name' => '115mm'],
                ['name' => '120mm'],
                ['name' => '125mm'],
            ]],
            ['name' => 'Motor', 'values' =>[
                ['name' => '3.5kw'],
                ['name' => '6kw'],
                ['name' => '9kw'],
            ]],
            ['name' => 'Weight', 'values' =>[
                ['name' => '900kg'],
                ['name' => '1000kg'],
                ['name' => '1250kg'],
                ['name' => '1350kg'],
                ['name' => '1500kg'],
            ]],
            ['name' => 'max.Working speed', 'values' =>[
                ['name' => '5000/min'],
                ['name' => '5500/min'],
                ['name' => '6000/min'],
                ['name' => '6500/min'],
                ['name' => '7000/min'],
            ]],
            ['name' => 'max.Traveling speed', 'values' =>[
                ['name' => '2000/min'],
                ['name' => '2500/min'],
                ['name' => '3000/min'],
                ['name' => '3500/min'],
                ['name' => '4000/min'],
            ]],
        ];

        for ($i=0; $i<count($objs); $i++){
            $attribute = Attribute::create([
                'name' => $objs[$i]['name'],
            ]);

            for ($j=0; $j<count($objs[$i]['values']); $j++){
                AttributeValue::create([
                   'attribute_id' => $attribute->id,
                   'name' => $objs[$i]['values'][$j]['name'],
                ]);
            }
        }
    }
}
