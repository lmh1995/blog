<?php
/*
 * @Author: your name
 * @Date: 2020-09-04 08:24:42
 * @LastEditTime: 2020-09-04 22:49:56
 * @LastEditors: LuMingHui
 * @Description: In User Settings Edit
 * @FilePath: \debugd:\GitProject\www2\blog\database\seeds\UsersTableSeeder.php
 */

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 3; $i++){
            DB::table('users')->insert([
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
