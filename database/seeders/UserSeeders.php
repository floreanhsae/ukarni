<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
Use Hash;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new User();
        $data->name = 'Admin';
        $data->email = 'adminpens@gmail.com';
        $data->password = Hash::make('PENS123');
        $data->save();
    }

}
