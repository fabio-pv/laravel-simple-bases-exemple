<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new \App\Models\v1\UserRole();
        $model->id = 1;
        $model->name = 'Admin';
        $model->save();

        $model = new \App\Models\v1\UserRole();
        $model->id = 2;
        $model->name = 'Common';
        $model->save();

    }
}
