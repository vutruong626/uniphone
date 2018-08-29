<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
    }
}

// class ProductTableSeeder extends Seeder
// {
//     public function run()
//     {
//         // $this->call(UsersTableSeeder::class);
//         DB::table('user')->insert([
//         	array('username'=>'vutruong','password'=>'123','email'=>'vutruong@email.com','level'=>'2'),
//         	array('username'=>'nguyennhi','password'=>'123','email'=>'nguyennhi@email.com','level'=>'2'),
//         	array('username'=>'vietha','password'=>'123','email'=>'vietha@email.com','level'=>'2')
//         ]);

//     }
// }

// class ProductTableSeeder extends Seeder
// {
//     public function run()
//     {
//         $this->call(UserTableSeeder::class);
        
//     }
// }
