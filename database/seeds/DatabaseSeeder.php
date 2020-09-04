<?php
/*
 * @Author: LuMingHui
 * @LastEditors: LuMingHui
 * @Date: 2020-09-01 22:03:01
 * @LastEditTime: 2020-09-04 22:54:02
 * @Email: 1871713153@qq.com
 * @Description: 
 */

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
        $this->call(UsersTableSeeder::class);
        $this->call(UserInfoTableSeeder::class);
    }
}
