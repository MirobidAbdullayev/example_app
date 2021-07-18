<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 50; $i++){
//            User::create([
//                'first_name'    => 'Mirobid_' . $i,
//                'last_name'     => "O'zbekiston" . $i,
//                'age'           => 18 + $i,
//                'address'       => 'Somewhere_' . $i,
//                'email'         => 'mir_' . $i . '@mir.com',
//                'password_original' => '12345678',
//                'password'      => Hash::make('12345678'),
//            ]);
            
            User::create([
               'first_name'  => 'das',
               'last_name'   => 'qwe',
               'age'         => 12,
               'address'     => '234',
               'email'       => '234' . $i + 1,
               'password_original'  => '234',
               'password'    => Hash::make('234')
           ]);
        }
    
    }
}





