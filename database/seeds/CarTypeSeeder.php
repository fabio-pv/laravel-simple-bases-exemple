<?php

use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $names = [
            'Sedan',
            'Hatch',
            'Sporty',
        ];

        foreach ($names as $name) {

            $model = new \App\Models\v1\CarType();
            $model->name = $name;
            $model->save();

        }
    }
}
