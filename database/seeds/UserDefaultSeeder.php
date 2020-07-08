<?php

use Illuminate\Database\Seeder;

class UserDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new \App\Models\v1\User();
        $model->name = 'default';
        $model->email = 'default@app.com';
        $model->password = bcrypt('1234');
        $model->save();
    }
}
