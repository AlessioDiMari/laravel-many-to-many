<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            "Web Design",
            "Web Developement",
            "User Experience",
        ];

        foreach ($types as $type) {

            $newType = new Type();
            
            $newType->name = $type;

            $newType->save();

        }

    }
}
